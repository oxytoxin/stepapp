<?php

namespace App\Http\Livewire;

use App\Mail\ProposalSubmission;
use App\Models\Proposal;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Resend\Laravel\Facades\Resend;

class Homepage extends Component implements HasForms
{
    use InteractsWithForms;

    public $data;

    protected function getFormStatePath(): ?string
    {
        return 'data';
    }

    protected function  getFormSchema(): array
    {
        return [
            TextInput::make('startup_name')
                ->required()
                ->label('Startup Name'),
            TagsInput::make('members')
                ->required()
                ->label('Name of Members')
                ->placeholder('New member'),
            FileUpload::make('logo')
                ->required()
                ->image(),
            FileUpload::make('proposal')
                ->required()
                ->acceptedFileTypes([
                    'application/pdf',
                ]),
        ];
    }

    public function mount()
    {
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.homepage');
    }

    public function propose()
    {
        $this->form->validate();
        $p = Proposal::create([
            'startup_name' => $this->data['startup_name'],
            'members' => $this->data['members'],
        ]);

        $p->addMedia(collect($this->data['logo'])->first())->toMediaCollection('logo');
        $p->addMedia(collect($this->data['proposal'])->first())->toMediaCollection('proposal');

        Mail::to('sksutbistepapp@gmail.com')->send(new ProposalSubmission($p));
        $this->data = [];
        $this->form->fill();
        $this->dispatchBrowserEvent('proposed');
    }
}
