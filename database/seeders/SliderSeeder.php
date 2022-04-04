<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert( [
            'title' => 'Slider Test',
            'description' => 'Slider Test Description',
            'image' => 'slider1.jpg',
            'active' => 1,
        ]);
    }
}
