<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Laboran',
            'email' => 'laboran@onelab.com',
            'password' => Hash::make('inilaboran'),
        ]);
        User::factory()->create([
            'name' => 'Kasir',
            'email' => 'kasir@onelab.com',
            'password' => Hash::make('inikasir'),
        ]);
    }
}
