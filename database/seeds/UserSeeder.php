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
        DB::table('users')->insert([
            'lastname' => "DOE",
            'firstname' => "John",
            'email' => 'admin'.'@freemanna.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'sponsorship_code' => Str::random(10),
            'remember_token' => Str::random(10),
            'role_id' => "1",

        ]);
    }
}
