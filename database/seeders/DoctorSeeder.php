<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Doctor::create([
            'name' => 'Dr. Ali',
            'specialization' => 'Cardiologist',
            'phone' => '08123456789',
        ]);
    
        \App\Models\Doctor::create([
            'name' => 'Dr. Budi',
            'specialization' => 'Neurologist',
            'phone' => '08123456780',
        ]);
    }
        
}
