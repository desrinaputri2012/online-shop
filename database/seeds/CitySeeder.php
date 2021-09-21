<?php

use Illuminate\Database\Seeder;
use App\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['province_id' => '1','city_id'=>'1.01','title' => 'Aceh Barat'],
            ['province_id' => '1','city_id'=>'1.02','title' => 'Aceh Timur'],
            ['province_id' => '2','city_id'=>'2.01','title' => 'Jakarta Barat'],
            ['province_id' => '2','city_id'=>'2.02','title' => 'Jakarta Selatan'],
            ['province_id' => '3','city_id'=>'3.01','title' => 'Bandung'],
            ['province_id' => '3','city_id'=>'3.02','title' => 'Bogor']
        ];
        \DB::table('cities')->insert($posts);
    }
}
