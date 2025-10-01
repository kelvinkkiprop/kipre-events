<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Main\Event;
use App\Models\Main\EventCategory;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventCategories = EventCategory::all();
        foreach ($eventCategories as $item) {
            // Default
            $items = [
                ['id'=>Str::uuid(), 'category_id'=>$item->id, 'title'=>'ISC 2025', 'start_time'=>Carbon::parse('2026-10-27 08:00:00'), 'end_time'=>Carbon::parse('2026-10-31 17:00:00'), 'description'=>null, 'created_at'=>now()],
            ];
        }
        Event::insert($items);
    }
}
