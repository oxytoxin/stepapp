<?php

namespace App\Http\Livewire;

use App\Models\PageDetail;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class ContactPage extends Component implements HasForms
{
    use InteractsWithForms;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('full_name')
                ->required(),
            TextInput::make('email')
                ->required()
                ->email(),
            Textarea::make('message')
                ->required(),
        ];
    }

    public function render()
    {
        return view('livewire.contact-page', [
            'details' => PageDetail::firstWhere('tag', 'contact')
        ]);
    }
}
