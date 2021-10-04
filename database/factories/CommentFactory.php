<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Proyect;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->text(250),
            'likes' => $this->faker->numberBetween([0, 50]),
            'proyect_id' => Proyect::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
