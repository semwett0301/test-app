<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory=Bank>
 */
class BankFactory extends Factory
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
            "name" => "adsada",
            "inn" => random_int(0, 999999),
            "common_information" => "FDSFSFDS",
            "address" => "dsfsd",
            "mobile_number" => "+7-921-232-12-33"
        ];
    }
}
