<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(array('male', 'female'));
        // $id = $this->faker->randomElement(array(1,5));
        $age = $this->faker->numberBetween(19,99);
        return [
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName,
            'other_name' => $this->faker->lastName,
            'username' => $this->faker->userName,
            'age' => $age,
            'gender' => $gender,
            'dob' => $this->faker->date(),
            'mobile' => $this->faker->phoneNumber,
            'address' => $this->faker->streetAddress,
            'doctor_note' => $this->faker->sentence(10),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
