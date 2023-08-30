<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        DB::table("table_product")->truncate();
        DB::table("table_product_brand")->truncate();
        DB::table("table_news")->truncate();
        DB::table("table_news_list")->truncate();
        foreach (["Bondi",
                     "Marrickville",
                     "Sutherland Shire",
                     "Drummoyne",
                     "Hunters Hill",
                     "Parramatta",
                     "Ryde",
                     "Inner West",
                     "North Sydney",
                     "North Shore",
                     "Epping",
                     "Botany",
                     "Castle Hill",
                     "Lane Cove",
                     "Punchbowl",
                     "Randwick",
                     "Paddington",
                     "Cronulla",
                     "Stanmore",
                     "Abbotsford",
                     "Birchgrove",
                     "Bellevue Hill",
                     "Neutral Bay",
                     "Dee Why",
                     "Manly",
                     "Blacktown",
                     "Glebe",
                     "Darlinghurst",
                     "Woolloomooloo",
                     "St Ives",
                     "Leichhardt",
                     "Surry Hills",
                     "Newtown",
                     "Camperdown",
                     "Strathfield",
                     "Rockdale",
                     "Balmain",
                     "Hornsby",
                     "Cremorne",
                     "Rosebery",
                     "Kellyville",
                     "Annandale",
                     "Belfield",
                     "Ashfield",
                     "Double Bay",
                     "Breakfast Point",
                     "Bronte"] as $chinhanh){
            \App\Models\ProductBrand::create([
                'nameen' => $chinhanh,
                'contenten' => fake()->realText(800),
                'descen' => fake()->realText(300),
                'slugen' => Str::slug($chinhanh),
                'status' => 'hienthi,noibat',
                'type' => 'service',
                'date_created' => time()
            ]);
        }

        foreach (["House Cleaning",
                     "Apartment Cleaning",
                     "Estate Cleaning",
                     "Office Cleaning",
                     "End of Lease Cleaning",
                     "Regular Cleaning",
                     "Deep Cleaning",
                     "Construction Cleaning",
                     "NDIS Cleaning",
                     "Oven Cleaning",
                     "Residential Window Cleaning",
                     "Tile Cleaning",
                     "Strata Cleaning",
                     "Pressure Washing",
                     "Carpet Cleaning"] as $service){
            \App\Models\Product::create([
                'nameen' => $service,
                'slugen' => Str::slug($service),
                'contenten' => fake()->realText(800),
                'descen' => fake()->realText(300),
                'status' => 'hienthi,noibat',
                'type' => 'service',
                'date_created' => time(),
                'size' => '',
                'color' => '',
                'xuatxu' => ''
            ]);

            for ($i = 1;$i <= 20; $i ++){
                $name = fake()->realText(30);
                $photo = fake()->imageUrl;
                $list = \App\Models\NewsList::create([
                    'nameen' => $name,
                    'contenten' => fake()->realText(800),
                    'descen' => fake()->realText(300),
                    'slugen' => Str::slug($name),
                    'status' => 'hienthi,noibat',
                    'type' => 'faq',
                    'date_created' => time(),
                    "photo" => $photo
                ]);
                for ($i = 1;$i <= 20; $i ++){
                    $name = fake()->realText(30);
                    $photo = fake()->imageUrl;
                    \App\Models\News::create([
                        'nameen' => $name,
                        'contenten' => fake()->realText(800),
                        'descen' => fake()->realText(300),
                        'slugen' => Str::slug($name),
                        'status' => 'hienthi,noibat',
                        'type' => 'faq',
                        'date_created' => time(),
                        "photo" => $photo,
                        "id_list" => $list->id
                    ]);
                }
                $name = fake()->realText(30);
                $photo = fake()->imageUrl;
                $list = \App\Models\NewsList::create([
                    'nameen' => $name,
                    'contenten' => fake()->realText(800),
                    'descen' => fake()->realText(300),
                    'slugen' => Str::slug($name),
                    'status' => 'hienthi,noibat',
                    'type' => 'blog',
                    'date_created' => time(),
                    "photo" => $photo
                ]);
                for ($i = 1;$i <= 20; $i ++){
                    $name = fake()->realText(30);
                    $photo = fake()->imageUrl;
                    \App\Models\News::create([
                        'nameen' => $name,
                        'contenten' => fake()->realText(800),
                        'descen' => fake()->realText(300),
                        'slugen' => Str::slug($name),
                        'status' => 'hienthi,noibat',
                        'type' => 'blog',
                        'date_created' => time(),
                        "photo" => $photo,
                        "id_list" => $list->id
                    ]);
                }

            }
        }

    }
}
