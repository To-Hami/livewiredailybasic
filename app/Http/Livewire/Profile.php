<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $user, $name, $email, $success;
    public $rules =
        [
            'name' => 'min:3'
        ];


    public function mount()
    {
        $this->name = auth::user()->name;
        $this->email = auth::user()->email;
    }

    public function updateprofile()
    {
        $this->validate($this->rules);

        Auth::user()->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->success = true;
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
