<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Gif;

class GifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gif::create(['user_id' => 0, 'filename' => 'test.gif', 'extension' => 'gif']);
    }
}