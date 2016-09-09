<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $jon = User::create(['email' => 'jon@namiccarolinas.com', 'password' => 'jsohan566','remember_token' => str_random(10)]);


        //sync superadmin
        $jon->roles()->sync([1]);

        //factory(App\User::class, 30)->create();
        factory(App\User::class, 50)->create()->each(function($user){
            $user->roles()->sync([3]);

        });
    }
}