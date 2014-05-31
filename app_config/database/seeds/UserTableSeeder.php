<?php

use Cianflone\Again\Entities\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'joe@cianflone.co',
            'password' => Hash::make('password123')
        ]);
    }

}
