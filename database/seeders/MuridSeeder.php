<?php

namespace Database\Seeders;

use App\Models\Murid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Murid = Murid::create([

            "name" => "ayam",
            "voterId" => "500001",

            "email" => "ayam@gmail.com",
            "classroom_id" => 1,
            "password" => bcrypt("ayam1234"),
        ]);

        $Murid->assignRole("voter");

        $Murid = Murid::create([

            "name" => "bebek",
            "voterId" => "500002",
            "email" => "bebek@gmail.com",
            "classroom_id" => 1,
            "password" => bcrypt("bebek1234"),
        ]);

        $Murid->assignRole("voter");

        $Murid = Murid::create([

            "name" => "kuda",
            "voterId" => "500003",
            "email" => "kuda@gmail.com",
            "classroom_id" => 2,
            "password" => bcrypt("kuda1234"),
        ]);

        $Murid->assignRole("voter");

        // Path to your CSV file
        $filePath = database_path('data.csv');

        // Create a CSV Reader instance
        $csv = Reader::createFromPath($filePath, 'r');
        $csv->setHeaderOffset(0); // Assumes the first row is the header

        // Get records as associative arrays
        $records = $csv->getRecords();

        foreach ($records as $record) {
            // Insert data into the database
            $Murid = Murid::create([

                "name" => $record['name'],
                "voterId" => $record['email'],
                "email" => $record['clasroom'],
                "classroom_id" => $record['classroom_encoded'],
                "password" => bcrypt($record['Password']),
            ]);

            $Murid->assignRole("voter");

        }

        $this->command->info("Data imported successfully from {$filePath}.");
    }
}
DB::table('murids')->insert($Murid);