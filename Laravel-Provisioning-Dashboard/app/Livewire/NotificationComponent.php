<?php

namespace App\Livewire;

use Livewire\Component;

class NotificationComponent extends Component
{

    public bool $showNotificationsDrawer = false;
    public function render()
    {
        return view('livewire.notification-component');
    }
}