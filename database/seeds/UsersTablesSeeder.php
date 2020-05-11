<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'name' =>'Ankit Vig',
        	'email' => 'ankit@gmail.com',
        	'password' => '1234',
        	 'remember_token' => '1234',
        	 'id' => '3',
        	  'email_verified_at'=> '2020-09-08'
        	  , 
        	  'created_at' => '2020-09-08', 
        	  'updated_at' => '2020-09-08'

        ]);

    }
}
