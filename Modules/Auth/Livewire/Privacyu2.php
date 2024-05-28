<?php

namespace Modules\Auth\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\View\View;

#[Layout('auth::layouts.master')]
#[Title('Auth - Privacyu2')]
class Privacyu2 extends Component
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
        return view('auth::livewire.privacyu2')->with([
            'tag' => '<livewire:auth::privacyu2 />'
        ]);
    }
}
