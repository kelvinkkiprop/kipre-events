<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use Illuminate\Support\Str;
use App\Models\Main\EventCategory;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default
        $items = [
            ['id'=>Str::uuid(), 'name'=>'International Conference', 'alias'=>null, 'created_at'=>now()],
        ];
        EventCategory::insert($items);
    }
}
