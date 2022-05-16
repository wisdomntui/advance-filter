<?php

namespace Database\Factories;

use App\Models\Relative;
use Illuminate\Database\Eloquent\Factories\Factory;

class RelativeFactory extends Factory
{
    /**
     * The cities assignable to relatives.
     *
     * @var array
     */
    private $cities = [
        'Alaska',
        'Lagos',
        'Nairobi',
        'Queens',
        'Las Vegas',
        'Mumbai',
        'Abuja',
    ];

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Relative::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(1, 30),
            'phone' => $this->faker->numerify('##########'),
            'employment_status' => $this->faker->randomElement(['employed', 'unemployed']),
            'location' => $this->faker->randomElement($this->cities),
        ];
    }
}
