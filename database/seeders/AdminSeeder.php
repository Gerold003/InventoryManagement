<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve the Admin role ID
        $adminRoleId = DB::table('roles')->where('name', 'Admin')->value('id');

        // A D M I N
        DB::table('mainuser')->insert([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'contact_number' => '09512463879',
            'password' => Hash::make('admin123'), 
            'role_id' => $adminRoleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
      
        $idepRoleId = DB::table('roles')->where('name', 'Employees')->value('id');

        // I N V E N T O R Y
        DB::table('users')->insert([
            'name' => 'Rudzmyr',
            'username' => 'rudzmyr',
            'email' => 'rudzmyr@gmail.com',
            'contact_number' => '09512463879',
            'password' => Hash::make('idepartment123'), 
            'role_id' => $idepRoleId,
            'department_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        $sdepRoleId = DB::table('roles')->where('name', 'Employees')->value('id');

        // S A L E S
        DB::table('users')->insert([
            'name' => 'Jervans',
            'username' => 'jervans',
            'email' => 'jervans@gmail.com',
            'contact_number' => '09512463879',
            'password' => Hash::make('sdepartment123'), 
            'role_id' => $sdepRoleId,
            'department_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // C L I E N T S
        DB::table('clients')->insert([
            'name' => 'Gerold',
            'username' => 'gerold',
            'email' => 'jervageroldns@gmail.com',
            'contact_number' => '09512463879',
            'password' => Hash::make('gerold123'), 
            'role_id' => $sdepRoleId,
            'department_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }

}



