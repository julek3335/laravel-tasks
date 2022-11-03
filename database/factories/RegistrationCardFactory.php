<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RegistrationCard>
 */
class RegistrationCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));

        $car = $faker->vehicleArray;

        return [
            'vehicle_identification_number' => $faker->vin(),
            'max_total_weight' => $this->faker->randomFloat(2,500,3500),
            'engine_capacity' => $this->faker->randomFloat(2,500,3000),
            'engine_power' => $this->faker->randomFloat(0,15,1500),
            'production_year' => $this->faker->year(),
            'max_axle_load' => $this->faker->randomFloat(2,500,3000),
            'max_towed_load' => $this->faker->randomFloat(2,0,8000),
            'brand' => $car['brand'],
            'model' =>$car['model'],
        ];
    }
}
