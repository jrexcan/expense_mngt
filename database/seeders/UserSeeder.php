<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();

        User::create([
            'name' => 'Administritor',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminpassword'),
            'role_id'=>1
            
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('userpassword'),
            'role_id'=> 2
        ]);
    }
}
