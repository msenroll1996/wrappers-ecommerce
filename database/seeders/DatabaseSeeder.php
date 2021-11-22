<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
            'phone' => '9823607175',
             'password' => bcrypt('admin123')
        ]);

        \App\Models\User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'mahesh@admin.com',
            'is_admin' => true,
            'phone' => '9823607175',
             'password' => bcrypt('admin123')
        ]);
    }
}
