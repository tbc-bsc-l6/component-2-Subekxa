<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        Category::truncate();
        Product::truncate();

//USER = TRADER
        $user1 = User::factory()->create([
            'name' => 'Cafe1',
            'email' => 'cafe1@gmail.com',
            'password' => 'subi@123'
        ]);

        $user2 = User::factory()->create([
            'name' => 'Cafe2',
            'email' => 'cafe2@gmail.com',
            'password' => 'subi@123'
        ]);

        $bread = Category::create([
            'name' => 'Bread',
            'slug' => 'bread'
        ]);

        $cake = Category::create([
            'name' => 'Cake',
            'slug' => 'cake'
        ]);

        $coffee = Category::create([
            'name' => 'Coffee',
            'slug' => 'coffee'
        ]);

        $snack = Category::create([
            'name' => 'Snack',
            'slug' => 'snack'
        ]);
//To create fake data
        $faker = Faker::create();

        // BREAD
        Product::create([
            'category_id' => $bread->id,
            'user_id' => $user1->id,
            'name' => 'Crossiant',
            'slug' => 'cheese-crossiant',
            'image' => 'crossiant.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(3)
        ]);
      
        Product::create([
            'category_id' => $bread->id,
            'user_id' => $user2->id,
            'name' => 'Sandwich',
            'slug' => 'veg-sandwich',
            'image' => 'sandwich.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(3)
        ]);
       
        Product::create([
            'category_id' => $bread->id,
            'user_id' => $user2->id,
            'name' => 'loaf Bread',
            'slug' => 'whole-wheat-bread',
            'image' => 'loafbread.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(3)
        ]);

        //CAKES
        Product::create([
            'category_id' => $cake->id,
            'user_id' => $user1->id,
            'name' => 'Cheese Cake',
            'slug' => 'cheese-cake-flavor',
            'image' => 'cheesecake.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        Product::create([
            'category_id' => $cake->id,
            'user_id' => $user1->id,
            'name' => 'Snack Cake',
            'slug' => 'snack-cake-baked-desert',
            'image' => 'snackcake.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        Product::create([
            'category_id' => $cake->id,
            'user_id' => $user2->id,
            'name' => 'Red velvet cake',
            'slug' => 'red-velvet-butter-cake',
            'image' => 'redcake.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        //COFFEE
        Product::create([
            'category_id' => $coffee->id,
            'user_id' => $user2->id,
            'name' => 'Cappuccino',
            'slug' => 'espresso-based-coffee',
            'image' => 'cappuccino.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        Product::create([
            'category_id' => $coffee->id,
            'user_id' => $user1->id,
            'name' => 'Espresso',
            'slug' => 'espresso-coffee-drink',
            'image' => 'espresso.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        Product::create([
            'category_id' => $coffee->id,
            'user_id' => $user2->id,
            'name' => 'Latte',
            'slug' => 'latte-coffee',
            'image' => 'latte.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        //SNACKS
        Product::create([
            'category_id' => $snack->id,
            'user_id' => $user2->id,
            'name' => 'Choclate chips cookies',
            'slug' => 'choclate-chips-cookies',
            'image' => 'cookies.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        Product::create([
            'category_id' => $snack->id,
            'user_id' => $user1->id,
            'name' => 'Sweet roll',
            'slug' => 'sweet-roll-baked-bun',
            'image' => 'sweetroll.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);

        Product::create([
            'category_id' => $snack->id,
            'user_id' => $user2->id,
            'name' => 'Choclate donut',
            'slug' => 'choclate-donut',
            'image' => 'donut.png',
            'description' => '<p>' . $faker->paragraph(20) . '</p>',
            'price' => $faker->randomNumber(2)
        ]);
    }
}