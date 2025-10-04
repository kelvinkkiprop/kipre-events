<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use App\Models\Main\Event;
use App\Models\Main\EventSession;

class EventSessionSeeder extends Seeder
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
                ["event_id"=>$event->id, "name"=>"Primate Behavior, ethics and medicine (AAALAC)", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"One Health: Emerging and re-emerging infectious diseases", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"Vaccine Research and development", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"Host pathogen interactions and immune modulation (parasitic diseases)", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"New insights into HIV infections and management", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"Empowering biomedical research in Africa", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"AMR and mitigation strategies", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"NTDs, diagnosis and therapeutics", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"Climate change and its impact on ecosystem health", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"Flow cytometry and clinical applications", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"POC diagnostics", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"Integrating genomics and AI in biomedical research", "created_at"=>now()],
                ["event_id"=>$event->id, "name"=>"Prevention and management of NCDs", "created_at"=>now()],
            ];
            EventSession::insert($items);
        }
    }
}
