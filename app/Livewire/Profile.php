<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.profile')->extends('layouts.student.student')->section('student');
    }
}