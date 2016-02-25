<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->usu_login = 'waldenylsonwpss';
        $user->password = Hash::make(md5('linux@@123'));

        $user->save();

    }
}
