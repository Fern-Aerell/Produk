<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'route' => 'Feature11',
                'produk_id' => 1,
                'name' => 'Feature 1',
                'content' => '<p>This is content feature 1</p>'
            ],
            [
                'route' => 'Feature12',
                'produk_id' => 1,
                'name' => 'Feature 2',
                'content' => '<p>This is content feature 2</p>'
            ],
            [
                'route' => 'Feature21',
                'produk_id' => 2,
                'name' => 'Feature 1',
                'content' => '<p>This is content feature 1</p>'
            ],
            [
                'route' => 'Feature22',
                'produk_id' => 2,
                'name' => 'Feature 2',
                'content' => '<p>This is content feature 2</p>'
            ],
        ];

        foreach($features as $feature) {
            Feature::create($feature);
        }
    }
}
