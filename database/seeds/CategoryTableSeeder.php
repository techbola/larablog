<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new \App\Category();
        $cat->name = 'HTML';
        $cat->slug = 'html';
        $cat->save();

        $cat1 = new \App\Category();
        $cat1->name = 'CSS';
        $cat1->slug = 'css';
        $cat1->save();

        $cat2 = new \App\Category();
        $cat2->name = 'PHP';
        $cat2->slug = 'php';
        $cat2->save();
    }
}
