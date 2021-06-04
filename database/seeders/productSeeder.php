<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'POCO M3',
            'price'=>'11,999 Rs.',
            'category'=>'Mobile',
            'description'=>'6 GB RAM | 128 GB ROM | Expandable Upto 512 GB, 16.59 cm (6.53 inch) Full HD+ Display, 48MP + 2MP + 2MP | 8MP Front Camera. 6000 mAh Lithium-ion Polymer Battery, Qualcomm Snapdragon 662 Processor',
            'gallery'=>'https://www.gsmarena.com/xiaomi_poco_m3-pictures-10599.php'
            ],
            [
                'name'=>'POCO M3',
                'price'=>'11,999 Rs.',
                'category'=>'Mobile',
                'description'=>'6 GB RAM | 128 GB ROM | Expandable Upto 512 GB, 16.59 cm (6.53 inch) Full HD+ Display, 48MP + 2MP + 2MP | 8MP Front Camera. 6000 mAh Lithium-ion Polymer Battery, Qualcomm Snapdragon 662 Processor',
                'gallery'=>'https://www.gsmarena.com/xiaomi_poco_m3-pictures-10599.php'
            ],
            [
                'name'=>'REDMI Note 10 Pro Max',
                'price'=>'23,912 Rs.',
                'category'=>'Mobile',
                'description'=>'8 GB RAM | 128 GB ROM | Expandable Upto 512 GB, 16.94 cm (6.67 inch) Full HD+ Display, 108MP + 8MP + 5MP + 2MP | 16MP Front Camera, 5020 mAh Li-Polymer Battery, Qualcomm Snapdragon 662 Processor',
                'gallery'=>'https://www.gsmarena.com/xiaomi_poco_m3-pictures-10599.php'
            ],
            [
                'name'=>'LG Smart TV',
                'price'=>'31,999 Rs.',
                'category'=>'TV',
                'description'=>'Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube, Operating System: WebOS, Resolution: Full HD 1920 x 1080 Pixels, Sound Output: 20 W, Refresh Rate: 50 Hz',
                'gallery'=>'https://www.gsmarena.com/xiaomi_redmi_note_10_pro_max-pictures-10770.php'
            ],
            [
                'name'=>'POCO M3',
                'price'=>'11,999 Rs.',
                'category'=>'Mobile',
                'description'=>'6 GB RAM | 128 GB ROM | Expandable Upto 512 GB, 16.59 cm (6.53 inch) Full HD+ Display, 48MP + 2MP + 2MP | 8MP Front Camera. 6000 mAh Lithium-ion Polymer Battery, Qualcomm Snapdragon 662 Processor',
                'gallery'=>'https://www.gsmarena.com/xiaomi_poco_m3-pictures-10599.php'
            ],
        ]);
    }
}
