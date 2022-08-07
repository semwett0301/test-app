<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition()
    {
        return [
            "content" => "fefaswfsdfvdcxvfgsedf",
            "topic" => "cvcxvaESFS",
            "bank_id" => random_int(1, 5)
        ];
    }
}
