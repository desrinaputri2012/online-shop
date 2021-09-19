<?php

use Illuminate\Database\Seeder;
use App\Province;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['province_id' => '1','title' => 'Aceh'],
            ['province_id' => '2','title' => 'DKI Jakarta'],
            ['province_id' => '3','title' => 'Jawa Barat']
        ];
        \DB::table('provinces')->insert($posts);
    }
}
