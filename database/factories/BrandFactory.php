<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_logos_id' =>$this->faker->randomElement([1,2,3,4,5]),
            'nama' => $this->faker->word(),
            'desc' => $this->faker->sentence(3),
            'types_id' => $this->faker->randomElement([1,2]),
            'ukurans_id' => $this->faker->randomElement([1,2,3,4,5,6]),
            'image_assets_id' => $this->faker->randomElement([1,2,3,4]),
            'motifs_id'=>$this->faker->randomElement([1,2,3,4]),
        ];
    }
}
