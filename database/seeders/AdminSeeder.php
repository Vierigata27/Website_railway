<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder {
    public function run(): void {
        DB::table('admin')->insert([
            [
                'nama' => 'Admin',
                'email' => 'admin@example.com',
                'password' => '$2y$12$wj9LEpT9PXIVnbpbAfKL2.U48DbrWoxgW7dk8AYrvxMMHELB9vxwu',
                'created_at' => '2025-03-01 09:03:38',
                'updated_at' => '2025-03-01 09:03:38',
            ],
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$12$V9EXSX//AXrBlh7x8sSxC.qIXokHKMPUw9r3jJcyrS2u/cK.X8YpK',
                'created_at' => '2025-03-01 09:04:04',
                'updated_at' => '2025-03-01 09:04:04',
            ]
        ]);
    }
}
