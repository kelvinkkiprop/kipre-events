<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Add
use App\Models\Others\Title;

class TitleSeeder extends Seeder
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
            ['id'=>1, 'name'=>'Prof','created_at'=>now()],
            ['id'=>2, 'name'=>'Dr','created_at'=>now()],
            ['id'=>3, 'name'=>'Mr','created_at'=>now()],
            ['id'=>4, 'name'=>'Mrs','created_at'=>now()],
            ['id'=>5, 'name'=>'Miss','created_at'=>now()],
        ];
        Title::insert($items);
    }
}
