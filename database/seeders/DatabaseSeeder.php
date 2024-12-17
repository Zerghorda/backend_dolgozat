<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recepts;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::factory()->create([
            'name'=>'előétel'
        ]);
         
        Category::factory()->create([
            'name'=>'leves'
        ]);
        Category::factory()->create([
            'name'=>'főétel'
        ]);
       
        Category::factory()->create([
            'name'=>'édesség'
        ]);
        Category::factory()->create([
            'name'=>'saláta'
        ]);
      
        Recepts::factory()->create([
            'name'=>'dupling',
            'category_id' =>1,
            'img_route'=>'https://static.vecteezy.com/system/resources/previews/030/637/712/large_2x/dumplings-image-hd-free-photo.jpg',
            'description'=>'cirkés dumplink'
        ]);
        Recepts::factory()->create([
            'name'=>'Gulyásleves',
            'category_id' =>3,
            'img_route'=>'https://static.streetkitchen.hu/live/uploads/2020/07/sertesgulyas-tarhonyaval_2-egyedi-1618x855.jpg',
            'description'=>'sertés gulyásleves'
        ]);
        Recepts::factory()->create([
            'name'=>'Cordon bleu',
            'category_id' =>2,
            'img_route'=>'https://img-global.cpcdn.com/recipes/e53dc6da2f7681a7/1200x630cq70/photo.jpg',
            'description'=>'szonkás mozerrlás Cordon bleu'
        ]);
        
    }
}
