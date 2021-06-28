<?php

namespace Database\Factories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->unique()->company(),
            "ja_name" => $this->faker->unique()->company(),
            "url" => $this->faker->url(),
            //
        ];
    }
}
