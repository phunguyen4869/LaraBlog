<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'parent_id' => null,
            'title' => 'Root Category',
            'meta_title' => 'Root Category',
            'slug' => 'root-category',
            'content' => 'If category has this element is parent_id, it is a root category.',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 1,
            'title' => 'Undefine Category',
            'meta_title' => 'Undefine Category',
            'slug' => 'undefine-category',
            'content' => 'If category has this element is parent_id, it is a undefine category.',
        ]);

        CategoryFactory::times(10)->create();
    }
}
