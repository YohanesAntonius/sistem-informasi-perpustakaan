<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role'  =>  'admin',
            'name'  =>  'Yohanes Antonius',
            'email' =>  'antoniusyohan22@gmail.com',
            'password' =>  bcrypt('yohan'),
            'remember_token' =>  Str::random(10),
            'created_at'      => \Carbon\Carbon::now(),
            'updated_at'      => \Carbon\Carbon::now()

        ]);
    }
}
