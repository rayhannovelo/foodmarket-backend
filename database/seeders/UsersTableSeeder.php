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
                'name' => 'Rayhan Novelo',
                'email' => 'rayhan.novelo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NQn/FUokKGp4MwUa5rE.i.Q9MTCPse.TiOAbkU9NHimlUrHTSlyqy',
                'roles' => 'ADMIN',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'address' => NULL,
                'houseNumber' => NULL,
                'phoneNumber' => NULL,
                'city' => NULL,
                'created_at' => '2022-08-05 02:40:50',
                'updated_at' => '2022-08-05 02:40:50',
                'profile_photo_path' => NULL,
            ),
        ));
        
        
    }
}