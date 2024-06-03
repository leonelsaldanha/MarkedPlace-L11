<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
          
          [
            'name' => 'Leonel Saldanha',
            'username' => 'lsaldanha',
            'email' => 'superadmin@mail.pt',
            'role' => 'superadmin',
            'status' => 'active',
            'password' => bcrypt('password')
          ],

          [
            'name' => 'Bartolomeu Cerdeira',
            'username' => 'bcerdeira',
            'email' => 'admin@mail.pt',
            'role' => 'admin',
            'status' => 'active',
            'password' => bcrypt('password')
          ],

          [
            'name' => 'Filipe',
            'username' => 'ffilipe',
            'email' => 'filipe@mail.pt',
            'role' => 'tecnico',
            'status' => 'active',
            'password' => bcrypt('password')
          ],

          [
            'name' => 'Tiago Reis',
            'username' => 'treis',
            'email' => 'tiago@mail.pt',
            'role' => 'tecnico',
            'status' => 'active',
            'password' => bcrypt('password')
          ],

          [
            'name' => 'User Exemplo',
            'username' => '',
            'email' => 'user0000@mail.pt',
            'role' => 'user',
            'status' => 'active',
            'password' => bcrypt('password')
          ],
        ]);
    }
}
