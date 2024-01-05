<?php

namespace App\Livewire\Frontend\Surrounding;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.surrounding.index');
    }
}
