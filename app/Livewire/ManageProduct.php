<?php

namespace App\Livewire;

use Livewire\Component;

class ManageProduct extends Component
{
    public function render()
    {
        return view(view: 'livewire.manage-product')->layout('admin-layout');
    }
}
