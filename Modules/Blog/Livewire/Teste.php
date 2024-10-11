<?php

namespace Modules\Blog\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\View\View;

#[Layout('blog::layouts.master')]
#[Title('Blog - Teste')]
class Teste extends Component
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
        return view('blog::livewire.teste')->with([
            'tag' => '<livewire:blog::teste />'
        ]);
    }
}
