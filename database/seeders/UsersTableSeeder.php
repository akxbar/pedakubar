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
                'name' => 'admin',
                'email' => 'admin@anwar.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$X6sMXr7guHLOb9YEMwrzf.3xNeaHxEOzlFvYUHLNQ72cnkBCxsKuy',
                'remember_token' => 'kEdYJ8IzIFNZHC9kMZ05Rkbe1RLUnUhEQiGysMQMTk1QWq8LdxIu0y0bzycg',
                'created_at' => '2024-12-18 12:04:34',
                'updated_at' => '2024-12-19 03:28:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$ltxlK9EhULH8QyGUIH7biOKxfto.f3rgavNa2CYMfFiG7lwv/yCjm',
                'remember_token' => NULL,
                'created_at' => '2024-12-19 07:52:57',
                'updated_at' => '2024-12-19 07:52:57',
            ),
        ));
        
        
    }
}