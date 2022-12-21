<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
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
        User::truncate();
        Category::truncate();
        \App\Models\Blog::truncate();

        $frontend=\App\Models\Category::factory()->create(['name'=>'frontend']);
        $backend=\App\Models\Category::factory()->create(['name'=>'backend']);

        \App\Models\Blog::factory(2)->create(['category_id'=>$frontend->id]);
        \App\Models\Blog::factory(2)->create(['category_id'=>$backend->id]);
        

        
       
    }
}
