<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use App\Models\role;
use Illuminate\Support\Facades\Route;

class Create extends Component
{
    public $role, $name, $actions = [], $permissions;

    public function mount()
    {
        $this->role = new role();
        $this->actions = $this->getPermission();
    }
    

    public function render()
    {
        return view('livewire.role.create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $role = $this->role;
        $role->name = $this->name;
        $role->permissions = [];
        if($this->permissions){
            foreach ($this->permissions as $permission) {
                $role->addPermission($permission);
            }
        }
        $role->save();
        return redirect()->route('roles.index');
    }

    public function getPermission()
    {
        
        $routes = Route::getRoutes();
        $actions = [];
        foreach ($routes as $route) {
            if ($route->getName() != "" && !substr_count($route->getName(), 'payment')) {
                $actions[] = $route->getName();
            }
        }

        $var = [];
        $i = 0;
        $ignoreArray = ['ignition', 'password', 'verification'];
        foreach ($actions as $action) {
            $input = preg_quote(explode('.', $action )[0].".", '~');
            $ignore = preg_quote(explode('.', $action )[0], '~');
            if(!in_array($ignore, $ignoreArray)){
                if(count(explode('.', $action )) > 1 ){
                    if(preg_quote(explode('.', $action )[1], '~') == 'index' || preg_quote(explode('.', $action )[1], '~') == 'dashboard'){
                        $op = preg_quote(explode('.', $action )[0], '~');
                        $op = str_replace("\-","-",$op);
                        array_push($actions,$op.'.all-data', $op.'.part-data',$op.'.self-data');
                    }
                }
                $var[$i] = preg_grep('~' . $input . '~', $actions);
                $actions = array_values(array_diff($actions, $var[$i]));
                $i += 1;
            }
        }

        return array_filter($var);
    }
}
