<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => "Webmaster",
            'email' => "webmaster@harborly.com",
            'password' => bcrypt('harborly12345'),
        ]);
        $user->assignRole('webmaster');

        $user = User::create([
            'name' => "Admin",
            'email' => "admin@harborly.com",
            'password' => bcrypt('harborly12345'),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => "Cliente",
            'email' => "cliente@harborly.com",
            'password' => bcrypt('harborly12345'),
        ]);
        $user->assignRole('customer');

    }
}
