<?php

namespace Modules\Auth\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class Registerc extends Component
{
    public function render(): View|string
    {
        return view('auth::livewire.registerc');
    }
}
