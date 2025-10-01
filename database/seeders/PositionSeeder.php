<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Add
use App\Models\Others\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default
        $items = [
            ["id"=>1, "name"=>"Undergraduate Student", "created_at"=>now()],
            ["id"=>2, "name"=>"Graduate Student (Master's Course)", "created_at"=>now()],
            ["id"=>3, "name"=>"Academic Investigator/Researcher/Faculty", "created_at"=>now()],
            ["id"=>4, "name"=>"Industrial Researcher/Employee", "created_at"=>now()],
            ["id"=>5, "name"=>"Government/Public Officer (Non-medical)", "created_at"=>now()],
            ["id"=>6, "name"=>"Government/Public Officer (Non-medical)", "created_at"=>now()],
            ["id"=>7, "name"=>"Medical Personnel/Officer (Clinical Technician, Clinician, Biomedical Engineer)", "created_at"=>now()],
            ["id"=>8, "name"=>"Medical Doctors/Nurses", "created_at"=>now()],
            ["id"=>9, "name"=>"Others (Specify)", "created_at"=>now()],
        ];
        Position::insert($items);
    }
}
