<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_reset_tokens')->delete();
        
        \DB::table('password_reset_tokens')->insert(array (
            0 => 
            array (
                'email' => 'userbaru@mail.com',
                'token' => '$2y$10$nL758h8DzdGxBvQ0ASZscedK5Al8hgPGo5PYYUbzGbFaPLJHPh.kO',
                'created_at' => '2023-02-26 03:24:05',
            ),
        ));
        
        
    }
}