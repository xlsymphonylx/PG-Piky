<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@system.dom',
            'password' => bcrypt(12345678)
        ]);

        $user->assignRole('admin');
    }
}
