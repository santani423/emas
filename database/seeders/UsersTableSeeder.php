<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'Super',
                'mobile' => '081234567890',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'gender' => 'male',
                'image' => null,
                'dob' => '1990-01-01',
                'current_address' => 'Jl. Contoh No.1',
                'permanent_address' => 'Jl. Contoh No.1',
                'occupation' => 'Administrator',
                'status' => 1,
                'reset_request' => 0,
                'fcm_id' => null,
                'remember_token' => null,
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
// php artisan db:seed --class=UsersTableSeeder
// 