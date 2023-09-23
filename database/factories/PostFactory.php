<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::pluck('id');

        return [
            'title' => $title = fake()->sentence(),
            'slug' => str($title)->slug(),
            'image' => 'images/posts/article-'.rand(1, 6).'.jpg',
            'body' => fake()->paragraphs(3, true),
            'category_id' => $categories->random(),
            'user_id' => User::value('id'),
        ];
    }
}
