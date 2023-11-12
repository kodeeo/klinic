<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class AdmissionFactory extends Factory
{
    
    public function definition()
    {
        return [
            'admission_id'=>$this->faker->unique()->numberBetween(100000,999999),
            'patient_id'=>$this->faker->numberBetween(1,5),
            'doctor_id'=>$this->faker->numberBetween(1,5),
            'admission_date'=>$this->faker->date(),
            'package_id'=>$this->faker->numberBetween(1,5),
            'insurance_id'=>$this->faker->numberBetween(1,5),
            'height'=>$this->faker->numberBetween(4,6),
            'weight'=>$this->faker->numberBetween(40,90),
            'allergies'=>$this->faker->randomElement(['Yes','No']),
            'tendancy'=>$this->faker->randomElement(['Yes','No']),
            'heart_diseases'=>$this->faker->randomElement(['Yes','No']),
            'high_BP'=>$this->faker->randomElement(['Yes','No']),
            'accident'=>$this->faker->randomElement(['Yes','No']),
            'diabetic'=>$this->faker->randomElement(['Yes','No']),
            'infection'=>$this->faker->randomElement(['Yes','No']),
            'quota'=>$this->faker->randomElement(['Freedom Fighter','Tribes','Farmer']),
            'others'=>$this->faker->text(),
            'guardian_name'=>$this->faker->name(),
            'guardian_relation'=>$this->faker->randomElement(['Father','Mother','Brother','Sister','Spouse']),
            'guardian_contact'=>$this->faker->phoneNumber(),
            'guardian_address'=>$this->faker->address(),
            'status'=>$this->faker->randomElement(['Admitted','Released']),
           


        ];
    }
}
