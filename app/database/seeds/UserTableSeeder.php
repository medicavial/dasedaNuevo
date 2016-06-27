<?php

class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('users')->delete();
	 
        User::create(array(
 
            'name'    		=> 'Sergio Alcalá',
            'email'         => 'soporte@daseda.net',
            'username'      => 'admin',
            'password'      => Hash::make('sistemas'), //hashes our password nicely for us
            'skill'			=> 'Web developer',
            'remember_token'=> hash('sha256',Str::random(10),false),
            'activated'		=> true
 
        ));
	 
    }
 
}

