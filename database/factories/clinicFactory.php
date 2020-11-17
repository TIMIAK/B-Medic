<?php

namespace Database\Factories;

use App\Models\clinic;
use Illuminate\Database\Eloquent\Factories\Factory;

class clinicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clinic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $socials = $this->faker->randomElement([
            'http://www.facebook.com'.$this->faker->company,
            'http://www.twitter.com'.$this->faker->company,
            'http://www.instagram.com'.$this->faker->company,
        ]);
        return [
            'name' => $this->faker->company . ' Hospital',
            'description' => $this->faker->sentence(40),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'image' => $this->faker->image(),
            'fax'=> $this->faker->phoneNumber,
            'website' => $this->faker->url,
            'email' => $this->faker->safeEmailDomain,
            'socials' => $socials,

            // Clinic Overview
            'about' => $this->faker->sentence(30),


        ];
    }
}
