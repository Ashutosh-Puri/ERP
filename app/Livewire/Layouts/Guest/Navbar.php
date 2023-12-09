<?php

namespace App\Livewire\Layouts\Guest;
use App\Livewire\Auth\Logout;
use Livewire\Component;

class Navbar extends Component
{   
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.layouts.guest.navbar');
    }
}
