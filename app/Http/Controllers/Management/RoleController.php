<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\role;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function index()
    {
        return Inertia::render('roles/index');
    }

    public function create()
    {
        $role = new role;
        $actions = $this->getPermission();
        return view('backend.role.create', compact('role','actions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);
        $role = new role;
        $role->name = $request->name;
        $role->permissions = [];
        if($request->permissions){
            foreach ($request->permissions as $permission) {
                $role->addPermission($permission);
            }
        }
        $role->save();
        return redirect()->route('roles.index');
    }

    public function edit($id)
    {
        $role = role::find($id);
        $actions = $this->getPermission();
        // dd($actions);
        return view('backend.role.edit', compact('role','actions'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,'.$id,
        ]);
        $role = role::find($id);
        $role->name = $request->name;
        $role->permissions = [];
        if($request->permissions){
            foreach ($request->permissions as $permission) {
                $role->addPermission($permission);
            }
        }
        $role->save();
        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $data = role::find($id);
        $data->delete();
        return $this->MessageSuccess(null, "Berhasil Menghapus Data");
    }

    public function datas(Request $request)
    {
        $data = Role::all();
        return $this->MessageSuccess($data);
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
