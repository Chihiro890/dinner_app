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
                'name' => 'English',
            ],
            [
                'name' => 'Japanese',
            ],
            [
                'name' => 'Spanish',
            ],
                        [
                'name' => 'other',
            ]
        ];
        DB::table('categories')->insert($param);
    }
}
