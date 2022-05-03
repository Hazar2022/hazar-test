<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserKarma;

class UserKarmaFactory extends Factory
{
    protected $model = UserKarma::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->name,
            'karma_score' => $this->faker->karma_score,
            'image_id' => $this->faker->image_id,
        ];
    }
}
