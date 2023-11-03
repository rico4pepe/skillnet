<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "fname"=> $this->faker->firstName(),
            "lname"=> $this->faker->lastName(),
            "email"=> $this->faker->unique->email(),
            "phone_number"=> $this->faker->phoneNumber(),
            "address"=> $this->faker->address(),
        ];
    }
}
