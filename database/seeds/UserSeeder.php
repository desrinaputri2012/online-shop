<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Admin Tyra Adams II','email' => 'uschoen@example.com','password' => bcrypt('rahasia'),'role' => 'seller', 'is_toko_aktif' => '1'],
            ['name' => 'Admin Libby Treutel','email' => 'arthur78@example.org','password' => bcrypt('rahasia'),'role' => 'seller', 'is_toko_aktif' => '1'],
            ['name' => 'Putri','email' => 'brown.maggie@example.com','password' => bcrypt('rahasia'),'role' => 'buyer', 'is_toko_aktif' => null],
            ['name' => 'Desrina','email' => 'wolf.ivy@example.net','password' => bcrypt('rahasia'),'role' => 'buyer', 'is_toko_aktif' => null]
        ];
        User::insert($data);
    }
}
