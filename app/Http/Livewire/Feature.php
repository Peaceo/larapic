<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Feature extends Component
{
    public string $encodedText;

    public array $content;

    public function mount(): void
    {
        $this->encodedText = config('app.wymmet');

        $contentKey =  ['app.ft', 'app.sd', 'app.td', 'app.fh', 'app.fi'];

        $this->content = array_map(function ($value) {
            return config($value);
        }, $contentKey);
    }

    public function render()
    {
        return view('livewire.feature');
    }
}
