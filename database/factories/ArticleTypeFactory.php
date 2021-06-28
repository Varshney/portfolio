<?php

namespace Database\Factories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\ArticleType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;


class ArticleTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->unique()->firstName(),
            "ja" => $this->faker->unique()->lastName(),
        ];
    }
}
