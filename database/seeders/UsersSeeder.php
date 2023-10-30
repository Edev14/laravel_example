<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {

        $basePath = base_path();
        $users_path = $basePath . '/../data/users.json';

        $data = file_get_contents($users_path);
        $users = json_decode($data);

        foreach ($users as $user) {
            
            User::create([
                'username' => $user->username,
                'email' => $user->email,
                'password' => bcrypt($user->password),
            ]);

        }
    }
}