<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Add
use App\Models\Others\UserStatus;

class UserStatusSeeder extends Seeder
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
            ['id'=>1, 'name'=>'Active','alias'=>'Activate', 'created_at'=>now()],
            ['id'=>2, 'name'=>'Disabled','alias'=>'Disable', 'created_at'=>now()],
            ['id'=>3, 'name'=>'Blocked','alias'=>'Block', 'created_at'=>now()],
        ];

        UserStatus::insert($items);
    }
}
