<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wardboy>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'case_no'=>$this->faker->numberBetween($min=1,$max=5),
            'name'=>$this->faker->name(),
            'ptype'=>$this->faker->text(),
            'email'=>$this->faker->email(),
            'birthdate'=>$this->faker->date(),
            'gender'=>$this->faker->randomElements(['male', 'female'])[0],
            'father'=>$this->faker->name(),
            'mother'=>$this->faker->name(),
            'nid'=>$this->faker->numberBetween($min=10000000,$max=200000000),
            'passport'=>$this->faker->numberBetween($min=10000000,$max=200000000),
            'language'=>$this->faker->randomElements(['Bangla', 'English','Arabic','Spanish','Hindi'])[0],
            'spouse'=>$this->faker->name(),
            'b_place'=>$this->faker->text(),
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'occupation'=>$this->faker->text(),
            'blood'=>$this->faker->bloodGroup(),
            'status'=>$this->faker->text(),
            'religion'=>$this->faker->randomElements(['Islam', 'Christian','Hinduism','Buddhist'])[0],
            'height'=>$this->faker->numberBetween($min=120,$max=200),
            'weight'=>$this->faker->numberBetween($min=20,$max=120),
            'e_name'=>$this->faker->phoneNumber(),
            'relation'=>$this->faker->text(),
            'contact_number'=>$this->faker->phoneNumber(),
            'password'=>$this->faker->password(),
            'patient_image'=>$this->faker->image('public/uploads/patients',640,480, null, false),
        ];
    }
}
