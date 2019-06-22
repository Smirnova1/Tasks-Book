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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Admin',
            'role_id' => '1',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
            'remember_token' => ' ',
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'role_id' => '2',
            'email' => 'user@user.com',
            'password' => bcrypt('qwerty'),
            'remember_token' => ' ',
        ]);
    }
}
