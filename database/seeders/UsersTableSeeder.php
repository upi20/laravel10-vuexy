<?php

namespace Database\Seeders;

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
                'name' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x8PiDorA3Od9YIFnkXGdGeYnDnkSE1R85sbWehRH5yiQ4XFHojraq',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'zbagdFUnAAbXw2CpYmpUor7vClieK7fRY19lU2qlS6uZ1Xps4UxSyGskOOab',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-02-25 14:58:27',
                'updated_at' => '2023-02-26 03:32:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Isep LN',
                'email' => 'iseplutpinur1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GNSs7vFqdCxEiX1zmx/HJuJZr3/xYYFGdc0PImdaPaplBKBXLaPwC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-02-25 16:44:52',
                'updated_at' => '2023-02-25 16:44:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'User Baru',
                'email' => 'userbaru@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.0n9dGunOmxV153Gxi9oguYzHaTKBYsks1NEesWyq4/ttRvJJWZg6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-02-26 03:14:45',
                'updated_at' => '2023-02-26 03:14:45',
            ),
        ));
        
        
    }
}