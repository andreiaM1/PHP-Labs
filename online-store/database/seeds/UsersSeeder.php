<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Buyer User',
            'email' => 'buyer@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Mihai Pop',
            'email' => 'mihai@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ana Popescu',
            'email' => 'ana@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Maria Dima',
            'email' => 'maria@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Alin Stanescu',
            'email' => 'alin@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Delia Popescu',
            'email' => 'delia@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Codrut Andrei',
            'email' => 'codrut@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Casiana Fusu',
            'email' => 'casiana@email.com',
            'role' => 'buyer',
            'password' => Hash::make('password'),
        ]);

        
    }
}
