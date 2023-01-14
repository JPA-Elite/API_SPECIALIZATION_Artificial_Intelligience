<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artificial>
 */
class ArtificialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->bothify('AI-##???'), // 'Hello 42jz'
            "specs" => $this->faker->text($maxNbChars = 200),
            "machine_type" => $this -> randNum(), //reactive, theory of mind, limited memory, self-aware
            "company" => $this->faker->company,
            "developer" => $this->faker->name,
            "origin" => $this->faker->address,

        ];
    }

    private function randNum()
    {
        $array = array("reactive", "theory of mind", "limited memory", "self-aware");
        return $array[$this->faker->numberBetween($min = 0, $max = count($array) - 1)];
    }
}
