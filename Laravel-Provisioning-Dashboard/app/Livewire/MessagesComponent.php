<?php

namespace App\Livewire;

use Livewire\Component;

class MessagesComponent extends Component
{

    public bool $MessagesModal = false;
    public function render()
    {
        return view('livewire.messages-component');
    }
}