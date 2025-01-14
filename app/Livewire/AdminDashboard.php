<?php

namespace App\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public $currentUrl;

    public function render()
    {

         $current_url = url()->current();
         $explore_url = explode('/',$current_url);

        $this->currentUrl= $explore_url[3]." ".$explore_url[4];


        return view('livewire.admin-dashboard')
            ->layout('admin-layout');
    }

}
