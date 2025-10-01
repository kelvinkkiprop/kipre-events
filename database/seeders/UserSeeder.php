<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Add
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default
        $items = [
            ['id'=>Str::uuid(),'first_name'=>'System','last_name'=>'Admin','email'=>'admin1@kipre.go.ke', 'password'=>Hash::make('Test@123'),'role_id'=>1,'status_id'=>2,'email_verified_at'=>now(),'remember_token'=>Str::random(50),'created_at'=>now()],
            ['id'=>Str::uuid(),'first_name'=>'System','last_name'=>'Applicant','email'=>'applicant1@kipre.go.ke', 'password'=>Hash::make('Test@123'),'role_id'=>1,'status_id'=>2,'email_verified_at'=>now(),'remember_token'=>Str::random(50),'created_at'=>now()],
        ];
        User::insert($items);
    }
}


