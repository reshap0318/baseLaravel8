<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use App\Models\role;

class Index extends Component
{
    public function render()
    {

        return view('livewire.role.index',[
            'roles' => role::all()
        ]);
    }
}
