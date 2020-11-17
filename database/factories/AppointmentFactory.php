<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(array('confirmed','pending','cancelled'));
        $user_id = $this->faker->numberBetween(1,6);
        $doctor_id = $this->faker->numberBetween(1,6);
        return [
            'user_id' => $user_id,
            'doctor_id' => $doctor_id,
            'appt_date' => $this->faker->date('Y-m-d',now()),
            'appt_time' => $this->faker->time('H:i:s',now()),
            'note_to_doctor' => $this->faker->sentence(20),
            'status' => $status,
        ];
    }
}
