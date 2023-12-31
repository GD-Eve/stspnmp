<?php

namespace App\Livewire\Frontend\Visit\Instructions;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.frontend.visit.instructions.index');
    }
}
