<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagsList = ['Vegetariano', 'Vegano', 'Senza glutine', 'Pesce', 'Carne', 'Senza lattosio'];
        foreach ($tagsList as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::slug($newTag->name);
            $newTag->save();
        }
    }
}
