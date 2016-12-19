<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Gif;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gif = Gif::find(1);

        $tag = Tag::create(['tag' => 'Calvin & Hobbes']);
        $gif->tags()->attach($tag->id);

        $tag = Tag::create(['tag' => 'Calvin']);
        $gif->tags()->attach($tag->id);

        $tag = Tag::create(['tag' => 'Hobbes']);
        $gif->tags()->attach($tag->id);

        $tag = Tag::create(['tag' => 'Toaster']);
        $gif->tags()->attach($tag->id);
    }
}