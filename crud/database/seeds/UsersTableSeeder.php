<?php

use Illuminate\Database\Seeder;

use App\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Users::create([
			'username' => 'sakib',			
			'password' => '123', //bcrypt()
			'email' => 'dhake@abc.com',
			'phone' => '0171',
			'name' => 'saki'
		]); 
    }
}
