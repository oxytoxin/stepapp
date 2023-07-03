<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

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
            TagsInput::make('name_of_members')
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
}
