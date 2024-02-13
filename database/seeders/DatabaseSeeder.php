<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);
        \App\Models\Role::create([
            'name' => 'admin',
            'description' => 'Admin role',
        ]);
        \App\Models\Role::create([
            'name' => 'user',
            'description' => 'user role',
        ]);
        \App\Models\Permission::create([
            'name' => 'add_user',
            'description' => 'user can add user',
        ]);
        \App\Models\Permission::create([
            'name' => 'View_User',
            'description' => 'user can View',
        ]);
    }
}
