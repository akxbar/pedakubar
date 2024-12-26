<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriDirektorisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_direktoris')->delete();
        
        \DB::table('kategori_direktoris')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Fasilitas Kesehatan',
                'active' => 1,
                'created_at' => '2024-12-21 14:36:24',
                'updated_at' => '2024-12-26 02:24:23',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Rumah Ibadah',
                'active' => 1,
                'created_at' => '2024-12-26 02:25:19',
                'updated_at' => '2024-12-26 02:25:19',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Hotel',
                'active' => 1,
                'created_at' => '2024-12-26 02:25:34',
                'updated_at' => '2024-12-26 02:25:34',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Bank & ATM',
                'active' => 1,
                'created_at' => '2024-12-26 02:25:56',
                'updated_at' => '2024-12-26 02:25:56',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Transportasi',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:09',
                'updated_at' => '2024-12-26 02:26:09',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'SPBU',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:21',
                'updated_at' => '2024-12-26 02:26:21',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Pembelanjaan',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:34',
                'updated_at' => '2024-12-26 02:26:34',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Kuliner',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:55',
                'updated_at' => '2024-12-26 02:26:55',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Souvenir',
                'active' => 1,
                'created_at' => '2024-12-26 02:27:15',
                'updated_at' => '2024-12-26 02:27:15',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Wisat dan Hiburan',
                'active' => 1,
                'created_at' => '2024-12-26 02:27:39',
                'updated_at' => '2024-12-26 02:27:39',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'BPP',
                'active' => 1,
                'created_at' => '2024-12-26 02:28:09',
                'updated_at' => '2024-12-26 02:28:09',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Rest Area',
                'active' => 1,
                'created_at' => '2024-12-26 02:28:38',
                'updated_at' => '2024-12-26 02:28:38',
            ),
        ));
        
        
    }
}