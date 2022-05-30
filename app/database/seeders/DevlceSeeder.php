<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DevlceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            [
                'name' => '山田',
                'menber_id' => 1,
            ],
            [
                'name' => 'ホンダ',
                'menber_id' => 2,
            ],
            [
                'name' => '柏田',
                'menber_id' => 3,
            ],
            [
                'name' => '鈴木',
                'menber_id' => 4,
            ],
            [
                'name' => '田中',
                'menber_id' => 5,
            ],
        ]);
    }
}