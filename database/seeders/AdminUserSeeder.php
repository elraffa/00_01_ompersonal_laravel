<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Orlando',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234'),
            'email_verified_at' => "2023-01-20 12:29:10"
        ]);

        $user->assignRole('admin');
    }
}
