<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sari Maulida',
            'email' => 'maulidasari@gmail.com',
            'password' => '180897mp' ('secret')
        ]);
    }
}
