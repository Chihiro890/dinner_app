<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            [
                'name' => '朝食',
            ],
            [
                'name' => '昼食',
            ],
            [
                'name' => '夕食',
            ]
        ];
        DB::table('categories')->insert($param);
    }
}
