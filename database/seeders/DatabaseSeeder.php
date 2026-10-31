<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '09171234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '09181234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Ana Reyes', 'email' => 'ana.reyes@example.com', 'phone' => '09191234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Mark Garcia', 'email' => 'mark.garcia@example.com', 'phone' => '09201234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Liza Cruz', 'email' => 'liza.cruz@example.com', 'phone' => '09211234567', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('users')->insert([
            ['username' => 'msantos', 'full_name' => 'Maria Santos', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'jdelacruz', 'full_name' => 'Juan Dela Cruz', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'areyes', 'full_name' => 'Ana Reyes', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'mgarcia', 'full_name' => 'Mark Garcia', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'lcruz', 'full_name' => 'Liza Cruz', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
