<?php

namespace App\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use PDF;

class DashboardL extends Component
{
    public function render()
    {
        return view('livewire.dashboard-l');
    }


    public function toast() {

        // $pdf = PDF::loadView('laporan.laporan');
        // return $pdf->stream("coba.pdf");
        
        // LivewireAlert::title('Save?')
        // ->withConfirmButton('Yes, Save')
        // ->withCancelButton('Cancel')
        // ->show();
    }
}
