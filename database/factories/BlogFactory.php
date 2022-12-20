<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=> Category::factory(),
            'slug'=>$this->faker->slug(),
            'title'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
            'intro'=>$this->faker->sentence()
        ];
    }
}