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
        \App\Models\User::factory(10)->create();

        $frontend = \App\Models\Category::create([
                        'name' => 'Front-end',
                        'slug' => 'front-end',
                    ]);
        $backend = \App\Models\Category::create([
            'name' => 'Back-end',
            'slug' => 'back-end',
        ]);

        \App\Models\Blog::create([
            'title'=>'This is frontend post',
            'slug'=>'front-end-post',
            'intro'=>'This is intro',
            'body'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id'=> $frontend->id

        ]);
        \App\Models\Blog::create([
            'title'=>'This is backend post',
            'slug'=>'front-end-post',
            'intro'=>'This is intro',
            'body'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'category_id'=> $backend->id

        ]);
    }
}
