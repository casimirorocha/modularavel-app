<?php

namespace Modules\Auth\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\View\View;

#[Layout('auth::layouts.master')]
class Register extends Component
{
    public function render(): View|string
    {
        return view('auth::livewire.register');
    }
}
