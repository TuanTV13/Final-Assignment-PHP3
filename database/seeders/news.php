<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class news extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timeStart = microtime(true);
        $bcrypt = bcrypt(12);
        $data = [];
        $now = now();
        $categories = 1;

        for ($i = 1; $i < 101; $i++) {

            $data[] = [
                'title' => $i . Str::random(),
                'views' => rand(0, 1000),
                'category_id' => $categories,
                'description' => $i . Str::random(),
                'image' => $i . Str::random(),
                'create_at' => $now
            ];

            if ($i % 10 == 0) {
                echo $i . PHP_EOL;
                DB::table('news')->insert($data);
                $data = [];
            }
        }

        echo microtime(true) - $timeStart;
    }
}
