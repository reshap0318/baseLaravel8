<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, role, role_user};

class UserSeeder extends Seeder
{
    public function run()
    {
        $dataUser = [
            'name' => 'Reinaldo Shandev P',
            'email' => 'aldo.reshap@gmail.com',
            'no_hp' => '082267486262',
            'isActive' => true,
            'email_verified_at' => now(),
            'password' => bcrypt('root'),
        ];

        $dataRole = [
            'name' => 'Super Admin',
            'permissions' => json_decode(
                '{"home.dashboard":true,"home.all-data":true,"roles.index":true,"roles.create":true,"roles.store":true,"roles.edit":true,"roles.update":true,"roles.destroy":true,"roles.all-data":true,"users.index":true,"users.create":true,"users.store":true,"users.edit":true,"users.update":true,"users.destroy":true,"users.all-data":true}'
            ,true),
        ];
        $user = User::Create($dataUser);
        $role = role::Create($dataRole);
        role_user::create([
            'role_id' => $role->id,
            'user_id' => $user->id,
        ]);
    }
}
