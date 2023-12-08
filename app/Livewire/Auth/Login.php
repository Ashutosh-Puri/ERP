<?php

namespace App\Livewire\Auth;
use App\Livewire\Auth\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

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

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    }
    
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.guest.guest')->section('guest');
    }
}
