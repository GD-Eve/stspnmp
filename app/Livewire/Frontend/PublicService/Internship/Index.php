<?php

namespace App\Livewire\Frontend\PublicService\Internship;

use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout("layouts.guest")]
class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.public-service.internship.index');
    }
}
