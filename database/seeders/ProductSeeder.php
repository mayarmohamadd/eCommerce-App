<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'feature_id' => 4,
                'name' => 'Mens Starry',
                'description' => 'Mens Starry Sky Printed Shirt 100% Cotton Fabric',
                'price' => 199.44,
                'image' => 'Products/MensStarry.png',
                'size' => json_encode(['S', 'M', 'L', 'XL']),
            ],
            [
                'feature_id' => 2,
                'name' => 'Black Winter',
                'description' => 'Autumn And Winter Casual cotton-padded jacket.',
                'price' => 468,
                'image' => 'Products/BlackWinter.png',
                'size' => json_encode(['S', 'M', 'L', 'XL']),
            ],
            [
                'feature_id' => 2,
                'name' => 'Black Dress',
                'description' => 'Solid Black Dress for Women, Sexy Chain Shorts Ladies',
                'price' => 740,
                'image' => 'Products/BlackDress.png',
                'size' => json_encode(['S', 'M', 'XL']),
            ],
            [
                'feature_id' => 2,
                'name' => 'denim dress',
                'description' => 'Blue cotton denim dress Look 2 Printed cotton dress',
                'price' => 1020,
                'image' => 'Products/denimdress.png',
                'size' => json_encode(['S', 'M', 'L']),
            ],
            [
                'feature_id' => 5,
                'name' => 'Pink Embroide...',
                'description' => 'EARTHEN Rose Pink Embroidered Tiered Max...',
                'price' => 1900,
                'image' => 'Products/PinkEmbroide.png',
                'size' => json_encode(['S', 'M' , 'L' , 'XL' ,'XXL']),
            ],
            [
                'feature_id' => 5,
                'name' => 'Women Printed Kurta',
                'description' => 'Neque porro quisquam est qui dolorem ipsum quia',
                'price' => 1600,
                'image' => 'Products/WomenPrintedKurta.png',
                'size' => json_encode(['S', 'M', 'XL','XXL']),
            ],
            [
                'feature_id' => 5,
                'name' => 'Black Dress',
                'description' => 'Solid Black Dress for Women, Sexy Chain Shorts Ladies',
                'price' => 740,
                'image' => 'Products/BlackDress.png',
                'size' => json_encode(['S', 'M', 'XL']),
            ],
            [
                'feature_id' => 2,
                'name' => 'Women’s Casual Wear',
                'description' => 'Checked Single-Breasted Blazer',
                'price' => 3000,
                'image' => 'Products/CasualWear.png',
                'size' => json_encode(['S', 'M', 'L' , 'XL']),
            ],
            [
                'feature_id' => 4,
                'name' => 'Black Jacket',
                'description' => 'This warm and comfortable jacket is great for learning',
                'price' => 2090,
                'image' => 'Products/BlackJacket.png',
                'size' => json_encode(['M', 'L', 'XL']),
            ],
            [
                'feature_id' => 4,
                'name' => 'Men’s Jacket',
                'description' => 'Men’s Jacket',
                'price' => 3500,
                'image' => 'Products/MenJacket.png',
                'size' => json_encode(['M', 'L', 'XL']),
            ],
            [
                'feature_id' => 1,
                'name' => 'Lip gloss',
                'description' => 'This lip gloss has the best texture! It feels smooth & substantial, without a bit of stickiness.',
                'price' => 290,
                'image' => 'Products/lipgloss.png',
            ],
            [
                'feature_id' => 1,
                'name' => 'Glossier Brow Duo',
                'description' => 'New Boy Brow Arch shapes and defines brows with a 2-in-1 custom tip shape— a precision edge for hair-like flicks and flat edge to fill sparse areas. Pair with our legendary face-framing Boy Brow for flexible hold + a total brow look.',
                'price' => 470,
                'image' =>'Products/GlossierBrowDuo.png',
            ],
            [
                'feature_id' => 1,
                'name' => 'Stretch Face Duo',
                'description' => 'Stretch Fluid Foundation + Stretch Balm Concealer',
                'price' => 365,
                'image' => 'Products/StretchFaceDuo.png',
            ],
            [
                'feature_id' => 3,
                'name' => 'Kid’s T-Shirt ',
                'description' => 'Let your toddler do their thing while feeling super comfy and looking extra stylish in this short-sleeve jersey t-shirt from 100% cotton with a unique print. The tee is soft, durable, and bound to become the staple of your toddler’s wardrobe.',
                'price' => 1100,
                'image' => 'Products/Kid’sT-Shirt.png',
                'size' => json_encode(['1', '2', '3']),
            ],
            [
                'feature_id' => 3,
                'name' => 'Spiderman Baby',
                'description' => 'Spiderman Baby Boys Clothing Sets Children Kids Summer Pajamas Child Clothes',
                'price' => 1100,
                'image' => 'Products/Spiderman.png',
                'size' => json_encode(['1', '2', '3','4']),
            ],
            [
                'feature_id' => 3,
                'name' => 'PINKY LOLLYPOP Girls Dress',
                'description' => 'Comfortable to wear',
                'price' => 1100,
                'image' => 'Products/LOLLYPOP.png',
                'size' => json_encode([ '2', '3','4' ,'6']),
            ],
        ];
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
