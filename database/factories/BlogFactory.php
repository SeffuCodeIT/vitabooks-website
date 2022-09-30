<?php

namespace Database\Factories;

use App\Models\User;
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
        return ['title' => $this->faker->sentence, //Generates a fake sentence
            'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
            'cover_pic' => $this->faker->image('public/assets/images', 400, 300, null, false), //generates fake 30 paragraphs
            'end_pic' => $this->faker->image('public/assets/images', 400, 300, null, false), //generates fake 30 paragraphs
            'user_id' => User::factory()
            //p
        ];
    }
}
