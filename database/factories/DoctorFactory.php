<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wardboy>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->name(),   
            'last_name'=>$this->faker->name(),
            'username'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'password'=>bcrypt('1234'),
            'degree'=>$this->faker->text(),
            'bio'=>$this->faker->text(),
            'phone'=>$this->faker->phoneNumber(),
            'mobile'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'date_of_birth'=>$this->faker->date(),
            'gender'=>$this->faker->randomElement(['male','female']),
            'blood_group'=>$this->faker->bloodGroup(),
            'department_id'=>$this->faker->numberBetween(1,10),
            'specialist'=>$this->faker->randomElement(['Burn','Bone','Fracture']),
            'image'=>$this->faker->image('public/uploads/doctors',640,480, null, false),
        ];
    }
}
