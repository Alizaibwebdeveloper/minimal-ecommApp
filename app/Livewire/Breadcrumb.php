<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $url;

    public function mount($url)
    {
        $this->url = $url;
    }
    public function render()
    {
        return view('livewire.breadcrumb');
    }
}
