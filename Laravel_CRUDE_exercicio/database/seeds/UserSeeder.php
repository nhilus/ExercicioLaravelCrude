<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'name' => 'Antonio Barbosa',
            'email' => 'tobarbosa11@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
            'isAdmin' => '1',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
