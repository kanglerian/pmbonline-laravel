<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'identity' => 6281313608558,
                'code' => NULL,
                'name' => 'Administrator',
                'sheet' => null,
                'email' => 'admin@amisbudi.com',
                'password' => Hash::make('admin123'),
                'phone' => '6281313608551',
                'role' => 'A',
                'status' => 1,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta')
            ],
            [
                'identity' => 6281286501015,
                'code' => NULL,
                'name' => 'Lerian Febriana, S.Kom',
                'email' => 'kanglerian@amisbudi.com',
                'password' => Hash::make('lerian123'),
                'sheet' => NULL,
                'phone' => '6281286501015',
                'role' => 'P',
                'status' => 1,
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta')
            ],
        ]);
    }
}
