<?php

use App\User;
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
       $user = User::create([
           'name'=> 'Dayannis',
           'email'=> 'dayannis@gmail.com',
           'password'=> bcrypt('123456')  

       ]);
   }
}