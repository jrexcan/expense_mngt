<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->truncate();

        Role::create([
            'name' => 'Administritor',
            'description' => 'Super User'
            
        ]);

        Role::create([
            'name' => 'User',
            'description' => 'Can create/edit/delete Expenses'
        ]);

    }
}
