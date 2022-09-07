<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'AGD DUŻE'],
            ['name' => 'AGD MAŁE'],
            ['name' => 'TV,AUDIO'],
            ['name' => 'SMARTFONY I GADŻETY'],
            ['name' => 'KOMPUTERY I TABLETY'],
            ['name' => 'KONSOLE I GRY'],
        ];
        ProductCategory::insert($data);
    }
}
