<?php

namespace Database\Factories;
namespace Database\Factories\Company;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => Str::random(2),
            'address' => $this->faker->name(),
            'contactno' => Str::random(12),
            'mailid' => $this-> faker->unique()->safeEmail(),
            'active' => 1,
           // 'companyid' => Company::factory()->create()
           //'companyid' => App\Models\Customer::factory()->create(),
           'company_id' => Customer::factory()->create(),
           'image' => $this->faker->name(),
        ];
    }
}
