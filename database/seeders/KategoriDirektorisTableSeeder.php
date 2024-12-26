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
                'sort' => 1,
                'title' => 'Fasilitas Kesehatan',
                'icon' => 'fa-medkit',
                'color' => 'bg-blue-dark',
                'active' => 1,
                'created_at' => '2024-12-21 14:36:24',
                'updated_at' => '2024-12-26 08:53:22',
            ),
            1 => 
            array (
                'id' => 2,
                'sort' => 2,
                'title' => 'Rumah Ibadah',
                'icon' => 'fa-hands-praying',
                'color' => 'bg-blue-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:25:19',
                'updated_at' => '2024-12-26 08:53:40',
            ),
            2 => 
            array (
                'id' => 3,
                'sort' => 3,
                'title' => 'Hotel',
                'icon' => 'fa-building',
                'color' => 'bg-blue-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:25:34',
                'updated_at' => '2024-12-26 08:53:57',
            ),
            3 => 
            array (
                'id' => 4,
                'sort' => 4,
                'title' => 'Bank & ATM',
                'icon' => 'fa-building',
                'color' => 'bg-mint-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:25:56',
                'updated_at' => '2024-12-26 08:58:54',
            ),
            4 => 
            array (
                'id' => 5,
                'sort' => 5,
                'title' => 'Transportasi',
                'icon' => 'fa-car',
                'color' => 'bg-mint-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:09',
                'updated_at' => '2024-12-26 08:54:17',
            ),
            5 => 
            array (
                'id' => 6,
                'sort' => 6,
                'title' => 'SPBU',
                'icon' => 'fa-gas-pump',
                'color' => 'bg-mint-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:21',
                'updated_at' => '2024-12-26 08:54:29',
            ),
            6 => 
            array (
                'id' => 7,
                'sort' => 7,
                'title' => 'Pembelanjaan',
                'icon' => 'fa-cart-shopping',
                'color' => 'bg-green-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:34',
                'updated_at' => '2024-12-26 08:54:46',
            ),
            7 => 
            array (
                'id' => 8,
                'sort' => 8,
                'title' => 'Kuliner',
                'icon' => 'fa-utensils',
                'color' => 'bg-green-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:26:55',
                'updated_at' => '2024-12-26 08:58:15',
            ),
            8 => 
            array (
                'id' => 9,
                'sort' => 9,
                'title' => 'Souvenir',
                'icon' => 'fa-gift',
                'color' => 'bg-green-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:27:15',
                'updated_at' => '2024-12-26 08:54:58',
            ),
            9 => 
            array (
                'id' => 10,
                'sort' => 10,
                'title' => 'Wisat dan Hiburan',
                'icon' => 'fa-umbrella-beach',
                'color' => 'bg-yellow-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:27:39',
                'updated_at' => '2024-12-26 08:55:11',
            ),
            10 => 
            array (
                'id' => 11,
                'sort' => 11,
                'title' => 'BPP',
                'icon' => 'fa-house',
                'color' => 'bg-yellow-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:28:09',
                'updated_at' => '2024-12-26 08:55:39',
            ),
            11 => 
            array (
                'id' => 12,
                'sort' => 12,
                'title' => 'Rest Area',
                'icon' => 'fa-location-dot',
                'color' => 'bg-yellow-dark',
                'active' => 1,
                'created_at' => '2024-12-26 02:28:38',
                'updated_at' => '2024-12-26 08:55:55',
            ),
        ));
        
        
    }
}