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
                'image' => asset('Feature/beauty.png'),
            ],
            [
                'name' => 'Fashion',
                'image' => asset('Feature/fashion.png'),
            ],
            [
                'name' => 'Kids',
                'image' => asset('Feature/kids.png'),
            ],
            [
                'name' => 'Mens',
                'image' => asset('Feature/mens.png'),
            ],
            [
                'name' => 'Womens',
                'image' => asset('Feature/womens.png'),
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
