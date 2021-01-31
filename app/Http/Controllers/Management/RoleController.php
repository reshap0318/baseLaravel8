<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\role;

class RoleController extends Controller
{
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
}
