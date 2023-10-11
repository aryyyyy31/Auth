<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ])->attachRole('Admin');

        \App\Models\User::create([
            'name' => 'Teller',
            'email' => 'teller@gmail.com',
            'password' => Hash::make('teller123'),
        ])->attachRole('Teller');
    }
}
