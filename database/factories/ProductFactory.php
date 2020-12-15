<?php

namespace Database\Factories;

use App\Models\product;
use App\Models\UMKM;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->state,
            'umkm_id'=>UMKM::find(rand(1, 5))->id,
            'description'=>$this->faker->sentence,
            'path_photo'=>'images/tenants-placeholder.jpg',
        ];
    }
}
