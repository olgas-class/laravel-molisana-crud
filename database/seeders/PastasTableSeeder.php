<?php

namespace Database\Seeders;

use App\Models\Pasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config("pasta");
        foreach ($data as $item) {
            $newPasta = new Pasta();
            $newPasta->title = $item["titolo"];
            $newPasta->description = $item["descrizione"];
            $newPasta->type = $item["tipo"];
            $newPasta->cooking_time = $item["cottura"];
            $newPasta->weight = $item["peso"];
            $newPasta->image = $item["src"];
            $newPasta->save();
        }
    }
}
