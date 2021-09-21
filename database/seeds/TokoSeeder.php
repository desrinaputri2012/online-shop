<?php

use Illuminate\Database\Seeder;
use App\Toko;
class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['status' => 'admin'],
            ['status' => 'Putri']
        ];
        Toko::insert($data);
    }
}
