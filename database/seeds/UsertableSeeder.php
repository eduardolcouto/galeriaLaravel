<?php

use Illuminate\Database\Seeder;
use App\User;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = 'Eduardo Couto';
        $user->email = 'eduardo.lcouto@gmail.com';
        $user->password = Hash::make('123456');

        $user->save();
    }
}
