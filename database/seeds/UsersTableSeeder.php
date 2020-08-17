<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Manoah Verdier',
                'email' => 'verdier.developpement@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0YL1HsOPy3XFvPT94MwrK.axLytteYpInalonr/269YTLmdJ3pqDy',
                'remember_token' => '7YzkKjR7BrnbpXUrwgl2x6XAg03sN6R74qWLOpBWdvut4wg66VQfLDJkwKXa',
                'settings' => NULL,
                'created_at' => '2020-06-29 09:20:20',
                'updated_at' => '2020-06-29 09:20:20',
            ),
        ));
        
        
    }
}