<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use Illuminate\Support\Str;
use App\Models\Main\Event;
use App\Models\Main\EventPackage;

class EventPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = Event::all();
        // Default
        foreach ($events as $event) {
            $items = [
                ['event_id'=>$event->id, 'name'=>'Kenyan/East African Participant', 'currency_type'=>'KES', 'cost'=>7500, 'alias'=>null, 'created_at'=>now()],
                ['event_id'=>$event->id, 'name'=>'Kenyan/East African Students', 'currency_type'=>'KES', 'cost'=>4000, 'alias'=>null, 'created_at'=>now()],
                ['event_id'=>$event->id, 'name'=>'International Students', 'currency_type'=>'USD', 'cost'=>100, 'alias'=>null, 'created_at'=>now()],
                ['event_id'=>$event->id, 'name'=>'International Participants', 'currency_type'=>'USD', 'cost'=>200, 'alias'=>null, 'created_at'=>now()],
            ];
            EventPackage::insert($items);
        }
    }
}
