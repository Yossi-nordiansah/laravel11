<?php

namespace Database\Factories;
//cara buat factory langsung nyambung dengan Model
//php artisan make:factory PostFactory --model=Post

use App\Models\User;
use Illuminate\Support\Str;
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
        return [
            "title" => fake()->sentence(),
            "slug" => Str::slug(fake()->sentence()),
            "body" => fake()->text(),
            "author_id" => User::factory()
        ];
    }
}
