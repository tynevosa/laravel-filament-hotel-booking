<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
             'email'=>'jan@hotmail.be',
             'name' => 'Jan',
             'email_verified_at' => now(),
             'password' => bcrypt(12345678), // password
             'remember_token' => Str::random(10),
             'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
         ]);

        User::factory(50)->create();
    }
}
