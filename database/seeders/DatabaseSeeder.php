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
            'img_route'=>'https://www.google.com/imgres?q=dumpling%20img&imgurl=https%3A%2F%2Fimages.squarespace-cdn.com%2Fcontent%2Fv1%2F55be995de4b071c106b3b4c0%2F6af0cbeb-8a58-4993-ab68-8e9919d6d04c%2FSalmon%2BDumplings-6.jpg&imgrefurl=https%3A%2F%2Featchofood.com%2Fblog%2F2023%2F1%2F4%2Fsalmon-and-bell-pepper-dumplings&docid=3sSsZG48SnNX7M&tbnid=zKLDW5JMX7zDCM&vet=12ahUKEwjA9PGJuK6KAxXH_7sIHa0QHigQM3oECGwQAA..i&w=1024&h=683&hcb=2&ved=2ahUKEwjA9PGJuK6KAxXH_7sIHa0QHigQM3oECGwQAA',
            'description'=>'cirkés dumplink'
        ]);
        Recepts::factory()->create([
            'name'=>'Gulyásleves',
            'category_id' =>3,
            'img_route'=>'https://www.google.com/imgres?q=sert%C3%A9s%20guly%C3%A1sleves&imgurl=https%3A%2F%2Fimg-global.cpcdn.com%2Frecipes%2F8c5d788532399637%2F680x482cq70%2Fgulyasleves-sertes-lapockabol-recept-foto.jpg&imgrefurl=https%3A%2F%2Fcookpad.com%2Fhu%2Freceptek%2F14057229-gulyasleves-sertes-lapockabol&docid=V1iA8Irt1I-IyM&tbnid=9IK1y2XMwuDnZM&vet=12ahUKEwj0k4a5uK6KAxWPIRAIHeXnD90QM3oFCIYBEAA..i&w=680&h=482&hcb=2&ved=2ahUKEwj0k4a5uK6KAxWPIRAIHeXnD90QM3oFCIYBEAA',
            'description'=>'sertés gulyásleves'
        ]);
        Recepts::factory()->create([
            'name'=>'Cordon bleu',
            'category_id' =>2,
            'img_route'=>'https://www.google.com/imgres?q=cordon%20bleu&imgurl=https%3A%2F%2Fimg-global.cpcdn.com%2Frecipes%2Fe53dc6da2f7681a7%2F1200x630cq70%2Fphoto.jpg&imgrefurl=https%3A%2F%2Fcookpad.com%2Fhu%2Freceptek%2F1925710-cordon-bleu&docid=lbmHpFLzG1latM&tbnid=zU3Yd__3rMZHCM&vet=12ahUKEwjo67nUuK6KAxUR3gIHHYUcCEcQM3oECFYQAA..i&w=1200&h=630&hcb=2&ved=2ahUKEwjo67nUuK6KAxUR3gIHHYUcCEcQM3oECFYQAA',
            'description'=>'szonkás mozerrlás Cordon bleu'
        ]);
        
    }
}
