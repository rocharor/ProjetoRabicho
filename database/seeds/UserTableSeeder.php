<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
            'name' => 'User 1',
            'email' => 'teste1@teste.com',
            'password' => '$2y$10$ikMLqVZKZq1U.eh4YzqeDOES/CALkqW2eBpKWFFbrJ7e9SJxKI/rG'
        ]);

        DB::table('users')->insert([
            'name' => 'User 2',
            'email' => 'teste2@teste.com',
            'password' => '$2y$10$ikMLqVZKZq1U.eh4YzqeDOES/CALkqW2eBpKWFFbrJ7e9SJxKI/rG'
        ]);

	//senha = ricardo
    }
}
