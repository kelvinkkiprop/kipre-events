<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use App\Models\Others\GuestType;

class GuestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default
        $items = [
            ['id'=>1, 'name'=>'Guest', 'created_at'=>now()],
            ['id'=>2, 'name'=>'Invited Speaker', 'created_at'=>now()],
            ['id'=>3, 'name'=>'Attendee (presenter)', 'created_at'=>now()],
            ['id'=>4, 'name'=>'Attendee (no presentation)', 'created_at'=>now()],
            ['id'=>5, 'name'=>'Exhibitor', 'created_at'=>now()],
        ];
        GuestType::insert($items);
    }
}
