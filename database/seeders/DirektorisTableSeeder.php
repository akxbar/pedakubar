<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DirektorisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('direktoris')->delete();
        
        \DB::table('direktoris')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Rumah Sakit Umum',
                'logo' => 'fa-building',
                'kategori_direktori_id' => '1',
                'body' => NULL,
                'image' => NULL,
                'multi_image' => '[]',
                'publish' => 1,
                'alamat' => NULL,
                'no_telp' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-26 05:48:14',
                'updated_at' => '2024-12-26 09:21:31',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Klinik',
                'logo' => 'fa-building',
                'kategori_direktori_id' => '1',
                'body' => NULL,
                'image' => NULL,
                'multi_image' => '[]',
                'publish' => 1,
                'alamat' => NULL,
                'no_telp' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-26 05:48:48',
                'updated_at' => '2024-12-26 09:03:16',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Puskesmas',
                'logo' => 'fa-building',
                'kategori_direktori_id' => '1',
                'body' => NULL,
                'image' => NULL,
                'multi_image' => '[]',
                'publish' => 1,
                'alamat' => NULL,
                'no_telp' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-26 05:49:05',
                'updated_at' => '2024-12-26 09:02:53',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Puskesmas Pembantu ',
                'logo' => 'fa-building',
                'kategori_direktori_id' => '1',
                'body' => NULL,
                'image' => NULL,
                'multi_image' => '[]',
                'publish' => 1,
                'alamat' => NULL,
                'no_telp' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-26 05:49:23',
                'updated_at' => '2024-12-26 09:02:39',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Mesjid',
                'logo' => 'fa-mosque',
                'kategori_direktori_id' => '2',
                'body' => NULL,
                'image' => NULL,
                'multi_image' => '[]',
                'publish' => 1,
                'alamat' => NULL,
                'no_telp' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-26 05:50:10',
                'updated_at' => '2024-12-26 09:05:42',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Gereja',
                'logo' => 'fa-church',
                'kategori_direktori_id' => '2',
                'body' => NULL,
                'image' => NULL,
                'multi_image' => '[]',
                'publish' => 1,
                'alamat' => NULL,
                'no_telp' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-26 05:51:13',
                'updated_at' => '2024-12-26 09:01:39',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Vihara',
                'logo' => 'fa-vihara',
                'kategori_direktori_id' => '2',
                'body' => NULL,
                'image' => NULL,
                'multi_image' => '[]',
                'publish' => 1,
                'alamat' => NULL,
                'no_telp' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-26 05:51:25',
                'updated_at' => '2024-12-26 09:01:26',
            ),
        ));
        
        
    }
}