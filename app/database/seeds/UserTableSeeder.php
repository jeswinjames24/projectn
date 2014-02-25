<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {  DB::table('users')->delete();

        /*User::create(array(
            'username' => 'firstuser',
            'password' => Hash::make('first_password')
        ));*/

        User::create(array(
            'username' => 'x',
            'password' => password_hash('x',PASSWORD_DEFAULT),
            'first_name'=>"Eteng",
            'last_name'=>"omini",
            'level'=>2,
            'active'=>2,
        ));


        User::create(array(
            'username' => 'a',
            'password' => Hash::make('a'),
            'first_name'=>"Eteng",
            'last_name'=>"omini",
            'level'=>2,
            'active'=>2,
        ));
    }
}