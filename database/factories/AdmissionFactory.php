<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admission>
 */
class AdmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patient_id'=>$this->faker->numberBetween(1,5),
            'doctor_id'=>$this->faker->numberBetween(1,5),
            'bed_id'=>$this->faker->numberBetween(1,5),
            'name'=>$this->faker->name(),
            'father_name'=>$this->faker->name(),
            'mother_name'=>$this->faker->name(),
            'relation'=>$this->faker->randomElement(['Spouse','Sister']),
            'address'=>$this->faker->text(),
            'mobile'=>$this->faker->phoneNumber(),
            'nid'=>$this->faker->numberBetween(100000,900000),
            'occupation'=>$this->faker->company(),
            'payment'=>$this->faker->numberBetween(100,500),
            'weight'=>$this->faker->numberBetween(10,150),
            'allergies'=>$this->faker->randomElement(['Yes','NO']),
            'tendancy'=>$this->faker->randomElement(['Yes','NO']),
            'heart_diseases'=>$this->faker->randomElement(['Yes','NO']),
            'high_BP'=>$this->faker->randomElement(['Yes','NO']),
            'accident'=>$this->faker->randomElement(['Yes','NO']),
            'diabetic'=>$this->faker->randomElement(['Yes','NO']),
            'others'=>$this->faker->text(),
            'infection'=>$this->faker->randomElement(['Yes','NO']),
            'details'=>$this->faker->text(),
            'condition'=>$this->faker->text(),
            'insurance'=>$this->faker->randomElement(['Yes','No']),
            'worksafe'=>$this->faker->randomElement(['Yes','No']),
            'tac'=>$this->faker->randomElement(['Yes','No']),
            'quota'=>$this->faker->randomElement(['Student','Employee']),
            'referred_by'=>$this->faker->randomElement(['Doctor','Another Doctor']),
            'visit'=>$this->faker->numberBetween(500,1000),

        ];
    }
}
