<?php

namespace App\Http\Livewire;

use App\Models\PageDetail;
use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        return view('livewire.about-page', [
            'details' => PageDetail::firstWhere('tag', 'about'),
        ]);
    }
}
