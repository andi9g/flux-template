<?php

namespace App\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class DashboardL extends Component
{
    public function render()
    {
        return view('livewire.dashboard-l');
    }


    public function toast() {
        LivewireAlert::title('Save?')
        ->withConfirmButton('Yes, Save')
        ->withCancelButton('Cancel')
        ->show();
    }
}
