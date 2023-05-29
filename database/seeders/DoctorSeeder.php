<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            'name' => 'Dr. Sithi',
            'phone'=>'019*****',
            'room'=> "2001",
            "speciality_name"=> "Cardiology"
        ]);
    }
}
