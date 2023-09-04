<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           // 'name' => fake()->name(),
           // 'email' => fake()->unique()->safeEmail(), 
          // 'name' => $this->faker->company(),
         //  'phone' => $this->faker->phoneNumber(),
         
         'cpyname' => $this->faker->name(),
         'address' => $this->faker->name(),  // text() // address()
        // 'contactno' => $this->faker->text(),
         'mailid' => $this->faker->unique()->safeEmail(),  // email()
        ];
    }
}
