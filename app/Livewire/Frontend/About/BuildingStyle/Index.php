<?php

namespace App\Livewire\Frontend\About\BuildingStyle;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.frontend.about.building-style.index');
    }
}
