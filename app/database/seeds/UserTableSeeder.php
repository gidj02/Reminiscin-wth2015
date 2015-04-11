<?php


class UserTableSeeder extends Seeder {

    public function run()
    {	
        DB::table('users')->delete();

        User::create(array('username' => 'gidj02',
        				   'password' => 'gidj02',
        				   'firstname' => 'Gino',
        				   'middlename' => 'Iglesias',
        				   'lastname' => 'de Jesus',
        				   'contact' => '09308229814',
        				   'email' => 'ginodejesus02@gmail.com'));
    }

}


?>