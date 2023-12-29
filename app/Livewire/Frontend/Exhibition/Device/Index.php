<?php

namespace App\Livewire\Frontend\Exhibition\Device;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.guest")]
class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.exhibition.device.index');
    }
}
