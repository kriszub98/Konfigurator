<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Administrator', 
            'email' => 'admin@admin.com',
            'role_id' => 2,
            'password' => bcrypt('admin')
        ]);
    }
}
