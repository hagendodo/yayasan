<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\User;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(4),
            'thumbnail' => $this->faker->regexify('[A-Za-z0-9]{2048}'),
            'slug' => $this->faker->slug(),
            'caption' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'content' => $this->faker->paragraphs(3, true),
            'published_at' => $this->faker->dateTime(),
            'publish_status' => $this->faker->word(),
        ];
    }
}
