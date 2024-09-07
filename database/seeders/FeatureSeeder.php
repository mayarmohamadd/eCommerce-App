<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'name' => 'Beauty',
                'image' => 'Feature/beauty.png',
            ],
            [
                'name' => 'Fashion',
                'image' =>'Feature/fashion.png',
            ],
            [
                'name' => 'Kids',
                'image' => 'Feature/kids.png',
            ],
            [
                'name' => 'Mens',
                'image' => 'Feature/mens.png',
            ],
            [
                'name' => 'Womens',
                'image' =>'Feature/womens.png',
            ],
        ];

        foreach ($features as $featureData) {
            Feature::create([
                'name' => $featureData['name'],
                'image' => $featureData['image'],
            ]);
        }

}
}
