<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(),
            'phone'=>$this->faker->text(),
            'email'=>$this->faker->text(),
            'address'=>$this->faker->text(),
            'managerName'=>$this->faker->text(),
            'status_id'=>Status::all()->random()->id
        ];
    }
}
