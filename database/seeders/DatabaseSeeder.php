<?php

namespace Database\Seeders;

use App\Models\Kriteria_Harga;
use App\Models\Kriteria_Penyimpanan;
use App\Models\Kriteria_Processor;
use App\Models\Kriteria_Ram;
use App\Models\Kriteria_Slot_Sim;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'name' => 'Dimas Aji Setiawan',
            'email' => 'dimazaji619@gmail.com',
            'password' => bcrypt('12345')
        ]);

         Kriteria_Ram::create([
            'pilihan_kriteria' => '4 GB',
            'bobot_kriteria' => '2'
        ]);

        Kriteria_Ram::create([
            'pilihan_kriteria' => '6 GB',
            'bobot_kriteria' => '3'
        ]);

        Kriteria_Ram::create([
            'pilihan_kriteria' => '8 GB',
            'bobot_kriteria' => '4'
        ]);
        Kriteria_Ram::create([
            'pilihan_kriteria' => '12 GB',
            'bobot_kriteria' => '5'
        ]);

        Kriteria_Processor::create([
            'pilihan_kriteria' => 'QUAD-CORE PROCESSOR',
            'bobot_kriteria' => '1'
        ]);
        Kriteria_Processor::create([
            'pilihan_kriteria' => 'HEXA-CORE PROCESSOR',
            'bobot_kriteria' => '3'
        ]);
        Kriteria_Processor::create([
            'pilihan_kriteria' => 'OCTA-CORE PROCESSOR',
            'bobot_kriteria' => '5'
        ]);
        Kriteria_Penyimpanan::create([
            'pilihan_kriteria' => '64 GB',
            'bobot_kriteria' => '1'
        ]);
        Kriteria_Penyimpanan::create([
            'pilihan_kriteria' => '128 GB',
            'bobot_kriteria' => '3'
        ]);
        Kriteria_Penyimpanan::create([
            'pilihan_kriteria' => '256 GB',
            'bobot_kriteria' => '5'
        ]);
        Kriteria_Harga::create([
            'pilihan_kriteria' => '2-3 Juta',
            'bobot_kriteria' => '2'
        ]);
        Kriteria_Harga::create([
            'pilihan_kriteria' => '3-4 Juta',
            'bobot_kriteria' => '3'
        ]);
        Kriteria_Harga::create([
            'pilihan_kriteria' => '4-5 Juta',
            'bobot_kriteria' => '4'
        ]);
        Kriteria_Harga::create([
            'pilihan_kriteria' => '>5 Juta',
            'bobot_kriteria' => '5'
        ]);
        Kriteria_Slot_Sim::create([
            'pilihan_kriteria' => 'Dual Slim Only',
            'bobot_kriteria' => '1'
        ]);
        Kriteria_Slot_Sim::create([
            'pilihan_kriteria' => 'Dual Slim Hybrid',
            'bobot_kriteria' => '3'
        ]);
        Kriteria_Slot_Sim::create([
            'pilihan_kriteria' => 'Triple Slot',
            'bobot_kriteria' => '5'
        ]);


    }
}
