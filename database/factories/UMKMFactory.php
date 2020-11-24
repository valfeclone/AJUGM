<?php

namespace Database\Factories;

use App\Models\UMKM;
use Illuminate\Database\Eloquent\Factories\Factory;

class UMKMFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UMKM::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->state,
            'path_photo'=>'images/tenants-placeholder.jpg'
        ];
    }
}
