<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['review' => 'Produk Bagus','product_id'=>1,'user_id' => 3],
            ['review' => 'Produk Baik','product_id'=>2,'user_id' => 4]
        ];
        \DB::table('reviews')->insert($posts);
    }
}
