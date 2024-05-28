<?php

namespace Modules\Auth\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\View\View;

#[Layout('auth::layouts.master')]
class About extends Component
{
    public int $count;

    /*
    |----------------------------------
    | Set initial values for properties
    |----------------------------------
    |
    | @return void
    |
    */
    public function mount(): void
    {
        $this->count = 1;
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }

    public function render(): View|string
    {
        return view('auth::livewire.about');
    }
}
