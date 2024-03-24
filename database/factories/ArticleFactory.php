<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)),0,-1);

        return [
            'title'=>$title,
            'body'=>$this->faker->paragraph(100,true),
            'slug'=>$slug,
            'img'=>'https://www.binary-clouds.com/images/Technology/Laravel-PHP.jpg',
            'created_at'=>$this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
