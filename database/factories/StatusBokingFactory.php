<?php

namespace Database\Factories;

use App\Models\StatusBoking;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
class StatusBokingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StatusBoking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return StatusBoking::factory()
        ->state(new Sequence(
            ['lantai' => 'Y'],
            ['lantai' => 'N'],
        ))
        ->make();
    }
}
