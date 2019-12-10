<?php

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class,5)->create();
        factory(Blog::class,20)->create();
    }
}
