<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['name' => 'Sepatu'],
            ['name' => 'Jaket / Hoodie / Sweater'],
            ['name' => 'Jersey'],
            ['name' => 'Tas'],
            ['name' => 'New Arrivals']
        ];
        \DB::table('categories')->insert($posts);
    }
}
