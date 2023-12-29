<?php

namespace App\Livewire\Frontend\PublicService\LostFound;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.guest")]
class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.public-service.lost-found.index');
    }
}
