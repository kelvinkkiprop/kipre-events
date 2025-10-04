<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Add
use App\Models\Others\ModeOfAttandance;

class ModeOfAttandanceSeeder extends Seeder
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
            ['id'=>1, 'name'=>'Online/Virtual','created_at'=>now()],
            ['id'=>2, 'name'=>'In-Person','created_at'=>now()],
        ];
        ModeOfAttandance::insert($items);
    }
}
