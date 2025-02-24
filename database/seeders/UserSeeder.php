<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(['name' => 'Tom',
            'is_active' => 1,
            'email' => 'syntraprogrammeurs@gmail.com',
            'email_verified_at' => Carbon::now(),
            'photo_id' => Photo::inRandomOrder()->first()->id,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),]);
        User::factory()->count(50)->create();
    }
}
