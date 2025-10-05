<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use App\Models\Main\EventRegistrationStatus;

class EventRegistrationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default
        $items = [
            ['id'=>1, 'name'=>'New', 'alias'=>'New', 'created_at'=>now()],
            ['id'=>2, 'name'=>'Paid', 'alias'=>'Paid', 'created_at'=>now()],
            ['id'=>3, 'name'=>'Confirmed', 'alias'=>'Confirm', 'created_at'=>now()],
        ];
        EventRegistrationStatus::insert($items);
    }
}
