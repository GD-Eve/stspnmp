<?php

namespace App\Livewire\Frontend\PublicService\Volunteer;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.guest")]
class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.public-service.volunteer.index');
    }
}
