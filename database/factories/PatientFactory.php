<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wardboy>
 */
class WardboyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'case_no'=>$this->faker->number(),
            'name'=>$this->faker->name(),
            'ptype'=>$this->faker->text(),
            'email'=>$this->faker->email(),
            'birthdate'=>$this->faker->birtDate(),
            'gender'=>$this->faker->gender(),
            'father'=>$this->faker->fatherName(),
            'mother'=>$this->faker->motherName(),
            'nid'=>$this->faker->nid(),
            'passport'=>$this->faker->passportNumber(),
            'language'=>$this->faker->language(),
            'spouse'=>$this->faker->spouseName(),
            'b_place'=>$this->faker->birthPlace(),
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'occupation'=>$this->faker->occupation(),
            'blood'=>$this->faker->bloodGroup(),
            'status'=>$this->faker->status(),
            'religion'=>$this->faker->religion(),
            'height'=>$this->faker->height(),
            'weight'=>$this->faker->weight(),
            'e_name'=>$this->faker->phoneNumber(),
            'relation'=>$this->faker->relation(),
            'contact_number'=>$this->faker->phoneNumber(),
            'password'=>$this->faker->password(),
            'patient_image'=>$this->faker->image('public/uploads/patients',640,480, null, false),
        ];
    }
}
