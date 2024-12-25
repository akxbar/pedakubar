<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PemondokansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pemondokans')->delete();
        
        \DB::table('pemondokans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tempat_pemondokan_id' => '1',
                'title' => 'Rumah Etam',
                'alamat' => ' Samarinda JL. MT. Haryono No. 36, Kota Samarinda, Kalimantan Timur - Indonesia - 75123',
                'body' => '<p>dfdsf</p>',
                'image' => '[{"name":null,"fasilitas":null}]',
                'publish' => 1,
                'embed_gmap' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-25 13:50:24',
                'updated_at' => '2024-12-25 13:50:24',
            ),
            1 => 
            array (
                'id' => 2,
                'tempat_pemondokan_id' => '2',
                'title' => 'rumah engang',
                'alamat' => NULL,
                'body' => '<p>dfdfd</p>',
                'image' => '[{"name":null,"fasilitas":null}]',
                'publish' => 1,
                'embed_gmap' => NULL,
                'link_gmap' => NULL,
                'created_at' => '2024-12-25 14:00:02',
                'updated_at' => '2024-12-25 14:00:02',
            ),
        ));
        
        
    }
}