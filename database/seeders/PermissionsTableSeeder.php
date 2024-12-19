<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'view_role',
                'guard_name' => 'web',
                'created_at' => '2024-12-18 12:38:15',
                'updated_at' => '2024-12-18 12:38:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'view_any_role',
                'guard_name' => 'web',
                'created_at' => '2024-12-18 12:38:15',
                'updated_at' => '2024-12-18 12:38:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'create_role',
                'guard_name' => 'web',
                'created_at' => '2024-12-18 12:38:15',
                'updated_at' => '2024-12-18 12:38:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'update_role',
                'guard_name' => 'web',
                'created_at' => '2024-12-18 12:38:15',
                'updated_at' => '2024-12-18 12:38:15',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'delete_role',
                'guard_name' => 'web',
                'created_at' => '2024-12-18 12:38:15',
                'updated_at' => '2024-12-18 12:38:15',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'delete_any_role',
                'guard_name' => 'web',
                'created_at' => '2024-12-18 12:38:15',
                'updated_at' => '2024-12-18 12:38:15',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'view_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'view_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'create_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'update_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'restore_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'restore_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'replicate_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'reorder_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'delete_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'force_delete_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'force_delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2024-12-19 07:51:57',
                'updated_at' => '2024-12-19 07:51:57',
            ),
        ));
        
        
    }
}