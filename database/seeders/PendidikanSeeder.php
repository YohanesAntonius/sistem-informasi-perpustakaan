<?php

namespace Database\Seeders;

use App\Models\Pendidikan;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendidikan::insert([
        [    'id'          => '1',
            'pendidikan'  =>  'SD',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now()
        ],
        [
            'id'          => '2',
            'pendidikan'  =>  'SMP',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now()
        ],
        [
            'id'          => '3',
            'pendidikan'  =>  'SMA/SMK',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now()
        ],
        [
            'id'          => '4',
            'pendidikan'  =>  'S1',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now()
        ],
        [
            'id'          => '5',
            'pendidikan'  =>  'S2',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now()
        ],
        [
            'id'          => '6',
            'pendidikan'  =>  'S3',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now()
        ],
        [
            'id'          => '7',
            'pendidikan'  =>  'Tidak Sekolah',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now()

        ],
        ]);
    }
}
