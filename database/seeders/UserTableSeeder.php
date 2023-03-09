<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create ([
            'name' => 'Bayu Priyatno',
            'email' => 'bayu.sks@gmail.com',
            'password' => Hash::make('12345678', [
                'rounds' => 12,
            ])
        ]);

        $admin->assignRole('admin');

    }
}
