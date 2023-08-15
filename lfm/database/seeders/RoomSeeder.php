<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $roomNames = [
            'R101', 'R102', 'R103', 'R104', 'R105',
            'R106', 'R107', 'R108', 'R109', 'R110',
        ];

        foreach ($roomNames as $roomName) {
            DB::table('rooms')->insert([
                'name' => $roomName,
                'assign_state' => false,
                'assigned_for' => null,
                'event_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
