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
            ['id'=>Str::uuid(),'first_name'=>'System','last_name'=>'Admin','username'=>'systemadmin','email'=>'admin@anzaacademy.com','country_id'=>91,'phone'=>'794267685',
            'password'=>Hash::make('Secret@123'),'role_id'=>1,'status_id'=>2,'email_verified_at'=>date('Y-m-d H:i:s'),'remember_token'=>Str::random(50),'created_at'=>date('Y-m-d H:i:s')],
            ['id'=>Str::uuid(),'first_name'=>'Learner','last_name'=>'Anza','username'=>'learneranza','email'=>'learner@anzaacademy.com','country_id'=>null,'phone'=> null,
            'password'=>Hash::make('Secret@123'),'role_id'=>2,'status_id'=>2,'email_verified_at'=>date('Y-m-d H:i:s'),'remember_token'=>Str::random(50),'created_at'=>date('Y-m-d H:i:s')],
            ['id'=>Str::uuid(),'first_name'=>'Instructor','last_name'=>'Anza','username'=>'instructoranza','email'=>'instructor@anzaacademy.com','country_id'=>null,'phone'=>null,
            'password'=>Hash::make('Secret@123'),'role_id'=>3,'status_id'=>2,'email_verified_at'=>date('Y-m-d H:i:s'),'remember_token'=>Str::random(50),'created_at'=>date('Y-m-d H:i:s')],
            ['id'=>Str::uuid(),'first_name'=>'Parent','last_name'=>'Anza','username'=>'parentanza','email'=>'parent@anzaacademy.com','country_id'=>null,'phone'=>null,
            'password'=>Hash::make('Secret@123'),'role_id'=>4,'status_id'=>2,'email_verified_at'=>date('Y-m-d H:i:s'),'remember_token'=>Str::random(50),'created_at'=>date('Y-m-d H:i:s')],
        ];

        User::insert($items);

        // $sql = File::get(database_path('seeders/userSeeder.sql'));
        // DB::unprepared($sql);
    }
}


