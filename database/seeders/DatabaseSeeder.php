<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'admin',
        ]);

        Role::create([
            'role_name' => 'user',
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        User::create([
            'username' => 'user1',
            'email' => 'user1@user.com',
            'password' => bcrypt('user'),
            'role_id' => 2,
        ]);

        Category::create([
            'name' => 'Flowers Box',
            'image' => 'box.jpg',
            'banner' => '1.png',
        ]);

        Category::create([
            'name' => 'Fresh Flowers',
            'image' => 'fresh.jpg',
            'banner' => '3.png',
        ]);

        Category::create([
            'name' => 'Artificial Flowers',
            'image' => 'arti.jpeg',
            'banner' => '4.png',
        ]);

        Category::create([
            'name' => 'Hand Bouquet',
            'image' => 'hand.jpg',
            'banner' => '2.png',
        ]);

        Category::create([
            'name' => 'Standing Flowers',
            'image' => 'standing.jpeg',
            'banner' => '6.png',
        ]);

        Category::create([
            'name' => 'Gift & Hampers',
            'image' => 'gift.jpg',
            'banner' => '5.png',
        ]);

        Product::create([
            'name' => 'Colorful Dusty Blue',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'cdb1.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Water Peach Sunset',
            'price' => '550000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'wps2.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Soft Chiffon',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'sc3.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Pastel Taffy',
            'price' => '300000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'pt4.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Snowie Blue',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'sb5.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Purple Heather',
            'price' => '550000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'ph6.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Mini Rose Rogue',
            'price' => '600000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'mrr7.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Frost Porcelain',
            'price' => '750000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'fp8.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Blush Lemonade',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'bl9.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Daisy Crepe',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'dc10.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Blue Indranila',
            'price' => '500000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'bi11.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Beauty Coral',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'bc12.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Clementine Clover',
            'price' => '150000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flower/1.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Rose Diantha',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/2.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Flora Yellow Fuchsia',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/3.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Pink Heather',
            'price' => '300000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/4.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Hyacinth',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/5.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Ivy Lavender',
            'price' => '550000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/6.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Rose Rouge',
            'price' => '600000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/7.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Marguerite Orchid',
            'price' => '750000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/8.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Zetta Willow',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/9.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Tansy Sekar',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/10.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Campanula Champion Pro White',
            'price' => '500000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/13.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Lily of The Valley',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Fresh Flowers/15.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Wisteria Flower',
            'price' => '150000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/21.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Bunch Artificial Flower',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/17.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Branch Artificial Flower',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/16.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Cherry Blossom',
            'price' => '300000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/13.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Polyester Faux',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/20.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Pink Bonsai',
            'price' => '550000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/3.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Tiny Rose',
            'price' => '600000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/4.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'White Cassia Iris',
            'price' => '750000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/10.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Amaryllis',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/7.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Azrina Blossom',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/6.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Aiyana Calyta',
            'price' => '500000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/8.webp',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Danica Eshal',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Artificial Flowers/1.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Dahlia Bundle Bouquet',
            'price' => '150000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Dahlia Bundle Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Daisy Flower Bouquet',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Daisy Flower Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Dusty Blue and White Bouquet',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Dusty Blue and White Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Eucalyptus Rose Bouquet',
            'price' => '300000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Eucalyptus Rose Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Lily Bouquet',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Lily Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Lisianthus Bouquet',
            'price' => '550000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Lisianthus Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Lovely Lavender Bouquet',
            'price' => '600000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Lovely Lavender Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Purple Lavender Bouquet',
            'price' => '750000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Purple Lavender Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Rose Bouquet',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Rose Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Rose Kubhis Bouquet',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Rose Kubhis Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Blue Magenta',
            'price' => '500000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Blue Magenta.jpeg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Statice Lemonium Bouquet',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Hand Bouquet/Statice Lemonium Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Chrome Modern Rectangle Stand Metal Geometric Vase',
            'price' => '150000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Chrome.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Elegant White and Green Flowers',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Elegant.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Gold Flower Stand Floral',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Gold.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Grand Event Centerpiece with Crystals',
            'price' => '300000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Grand.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Industrial Romantic NYC',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Industrial.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Metal Floor Column Stand Geometric Centerpiece',
            'price' => '550000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Metal.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Neo Classic Stand',
            'price' => '600000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Neo.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Peach White Rose Stand Flower',
            'price' => '750000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Peach.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Rectangular Matte Black Metal Wedding',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Rectangular.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Rod Metal Centerpiece Stand',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Rod.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Tiered Gold Hoop Pillar Stand',
            'price' => '500000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/Tiered.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'White Metal Flower Stand',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Standing Flowers/White.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Acrilic Gift Box',
            'price' => '150000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Acrilic.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Boxed Artificial Flower',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Boxed.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Envelope Gift Box',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Envelope.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Galaxy Rose Forever Preserved Eternal Roses',
            'price' => '300000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Galaxy.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Gucci Flowers Box',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Gucci.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Lovely Gift Box',
            'price' => '550000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Lovely.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Luna Flowers Hampers',
            'price' => '600000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Luna.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Luxury Flower Gift Box',
            'price' => '750000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Luxury.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Peony Round Box',
            'price' => '250000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Peony.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Purple Rose Soap Gift Box',
            'price' => '450000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/Purplr.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Rose Gift Box',
            'price' => '500000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift and Hampers/rgb.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Rose Sakura Gift Box',
            'price' => '350000',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'image' => 'Gift & Hampers/rsgb.jpg',
            'category_id' => 6,
        ]);
    }
}
