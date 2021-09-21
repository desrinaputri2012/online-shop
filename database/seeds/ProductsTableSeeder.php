<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name' => "SEPATU DONOVAN MITCHELL D.O.N. ISSUE #3 - PREP SCHOOL",
                'description' => 'Seperti sitkom legendaris era 90-an, Donovan pindah dari kota ke daerah pinggiran untuk mengejar mimpi basketnya. D.O.N. Issue #3: Sepatu Prep School dari adidas Basketball dibuat dalam kolaborasi bersama Bel-Air Athletics. Dilengkapi upper berpola di bagian dalam dan luar yang menyerupai lining dari jaket prep school yang ikonis dari acara tersebut. Dari pusat kota hingga Greenwich, gaya unik Donovan yang diterjemahkan ke segala jenis lapangan.Seperti sitkom legendaris era 90-an, Donovan pindah dari kota ke daerah pinggiran untuk mengejar mimpi basketnya. D.O.N. Issue #3: Sepatu Prep School dari adidas Basketball dibuat dalam kolaborasi bersama Bel-Air Athletics. Dilengkapi upper berpola di bagian dalam dan luar yang menyerupai lining dari jaket prep school yang ikonis dari acara tersebut. Dari pusat kota hingga Greenwich, gaya unik Donovan yang diterjemahkan ke segala jenis lapangan.',
                'image' => 'imageproduct/Ysmwh02YGJ462xvQbJDHmwaEbcATZasBrhgTT1Zn.png',
                'price' => 1800000,
                'weight' => 2000,
                'categories_id' => 1,
                'stok' => 100,
                'user_id' => 1
            ],
            [
                'name' => "ADIDAS ULTRABOOST X LEGO® COLORS SHOES",
                'description' => 'Running is your time to play. And if you couldnt tell by the pops of colour and LEGO® bricks inspired design, these adidas running shoes created with the LEGO Group are all about play. Play, and comfort. Because nothing needs to get in the way of a good time. A plush Boost midsole takes care of the cushioning, and the Continental™ Better Rubber outsole balances fast moves with steady grounding',
                'image' => 'imageproduct/r4OQ0NVj0aew0vSsYMki2To7TxbhUDTutU41gqB8.png',
                'price' => 3200000,
                'weight' => 2000,
                'categories_id' => 1,
                'stok' => 100,
                'user_id' => 1
            ],
            [
                'name' => "WINDBREAKER MANGA",
                'description' => 'Windbreaker adidas ini menampilkan grafis yang membayangkan karakter Lotso dan Buzz Lightyear dari Pixar sebagai karakter manga. Kain ringan dan ritsleting di bagian depan membuat jaket ini mudah dipakai di bagian luar untuk kondisi pagi yang dingin.',
                'image' => 'imageproduct/69GE8dHexUiejFc8tGHegDckZA65pxTKMDqGaiNq.png',
                'price' => 1400000,
                'weight' => 1500,
                'categories_id' => 2,
                'stok' => 200,
                'user_id' => 1
            ],
            [
                'name' => "LOVE UNITES WINDBREAKER (GENDER NEUTRAL)",
                'description' => 'Celebrate Pride. This adidas windbreaker is the perfect antidote to grey skies. Other than the bright print, the design is simple with side pockets and a stand-up collar.',
                'image' => 'imageproduct/Kd9SFF1fc5CeMnAZhTNN3Sw7OJVtRNQVVtcpj99o.png',
                'price' => 1200000,
                'weight' => 1500,
                'categories_id' => 2,
                'stok' => 200,
                'user_id' => 1
            ],
            [
                'name' => "JERSEY FC BAYERN HOME 21/22",
                'description' => 'Siapa pahlawan dalam pertandingan sepak bola? Pemain di lapangan atau fans di bangku penonton? Home Jersey adidas FC Bayern memberikan apresiasi pada semua superhero dalam dunia sang klub. Pakai sebagai style sehari-hari. AEROREADY menghilangkan kelembapan agar kamu tetap merasa kering.',
                'image' => 'imageproduct/Lo5d6FQd1n5KSKQEGDJijEHzmc478FHPJaZBluK5.png',
                'price' => 950000,
                'weight' => 1000,
                'categories_id' => 3,
                'stok' => 50,
                'user_id' => 2
            ],
            [
                'name' => "JERSEY REAL MADRID AWAY 21/22",
                'description' => 'Superstar Real Madrid bukan satu-satunya seniman yang mempertaruhkan aksi mereka di ibukota Spanyol. Jersey sepak bola adidas ini mengambil inspirasi dari grafiti yang menambahkan warna pada jalanan kota yang abu-abu. Detail samar dan sentuhan akhir berupa apresiasi pada bagian leher. AEROREADY yang menyerap kelembapan dan kain lembut dikombinasikan agar kamu tetap nyaman.',
                'image' => 'imageproduct/xkU6Z2B8rSbNpLelveDEMDV1yOUDZ4i0LzXYT9fW.png',
                'price' => 950000,
                'weight' => 1500,
                'categories_id' => 3,
                'stok' => 75,
                'user_id' => 2
            ],
            [
                'name' => "TAS RANSEL ADICOLOR CLASSIC KECIL",
                'description' => 'Ukuran kecil tak berarti kurang stylish. Hadirkan sentuhan klasik pada tampilanmu saat memakai tas ransel adidas 3-Stripes ini. Ponsel dan kunci selalu mudah diakses, berkat saku depan beritsleting dan saku selip di bagian samping. Produk ini dibuat dengan Primegreen, rangkaian material hasil daur ulang beperforma tinggi.',
                'image' => 'imageproduct/AWLDVn77IZaqyoeEnXZen2XgFypX5dTQoWxim26p.png',
                'price' => 600000,
                'weight' => 1000,
                'categories_id' => 4,
                'stok' => 150,
                'user_id' => 2
            ],
            [
                'name' => "TAS RANSEL ADIDAS BY STELLA MCCARTNEY",
                'description' => 'Ada banyak hal yang harus dilakukan dalam satu hari, dan terkadang banyak tempat yang harus disinggahi. Tas ransel adidas serbaguna by Stella McCartney ini menjadikan semuanya lebih mudah. Ke gym. Kerja. Ke aktivitas lain. Keluar bersama teman atau pergi untuk akhir pekan. Apa pun urutannya, desain dan saku yang lega dapat memuat semua perlengkapan yang kamu perlukan. Masukkan pakaian gym-mu ke dalam saku beritsleting di bagian samping dan pisahkan dari yang lain. Produk ini dibuat dengan Primegreen, rangkaian material hasil daur ulang beperforma tinggi.',
                'image' => 'imageproduct/Mng3yaieBYEwrRjBIQVRHxNAnXnJ2lY9ncJx2CCk.png',
                'price' => 2400000,
                'weight' => 1000,
                'categories_id' => 4,
                'stok' => 120,
                'user_id' => 2
            ]

        ];
        \DB::table('products')->insert($posts);
    }
}
