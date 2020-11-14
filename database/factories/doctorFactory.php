<?php

namespace Database\Factories;

use App\Models\doctor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class doctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_string = $this->faker->word . '.' . $this->faker->word;
        $social_links = array(
        "facebook" =>  "https://facebook.com/$user_string",
        "linkedin" =>  "https://linkedin.com/$user_string",
        "twitter" =>  "https://twitter.com/$user_string",
    );
        $gender = $this->faker->randomElement(array('male', 'female'));
        // $id = $this->faker->randomElement(array(1,99));
        $age = $this->faker->randomElement(array(19,99));
        return [
            // Basic Info
            'doctor_id' => $this->faker->unique()->randomDigit,
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName,
            'other_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'gender' => $gender,
            'dob' => $this->faker->date(),
            'age' => $age,
            'specialization' => $this->faker->word(1),
            'description' => $this->faker->sentence(20),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

            // Doctor Location
            'location_name' => $this->faker->state,
            'address' => $this->faker->streetAddress,
            // Doctor Overview

            'bio' => $this->faker->sentence(40),

            // Doctor Experience

            'experience' => $this->faker->sentence(40),

            // Socials

            'socials' => $social_links,
        ];
    }
}
