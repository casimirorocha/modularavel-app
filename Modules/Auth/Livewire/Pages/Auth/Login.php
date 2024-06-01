<?php

namespace Modules\Auth\Livewire\Pages\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\View\View;
use Modules\Auth\Livewire\Forms\LoginForm;
use Session;

#[Layout('auth::layouts.master')]
#[Title('Auth - Login')]
class Login extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    public function render(): View|string
    {
        return view('auth::livewire.pages.auth.login');
    }
}
