<?php

use Illuminate\Database\Seeder;
use App\JenisUser;
class JenisUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'buyer'],
            ['name' => 'seller']
        ];
        JenisUser::insert($data);
    }
}
