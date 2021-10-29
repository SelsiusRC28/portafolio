<?php

namespace Database\Factories;

use App\Models\Proyect;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProyectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        return [
            'title' => $name,
            'img' => $this->faker->image('public/storage/proyects', 1920, 1080, null, false),
            'description' => $this->faker->text(250),
            'content' => $this->faker->text(5000),
            'slug' => Str::slug($name),
            'status' => $this->faker->randomElement([1, 2]),
            'user_id' => 1

        ];
    }
}
