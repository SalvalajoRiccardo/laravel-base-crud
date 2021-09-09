<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $array_comic = config('comics');

        foreach($array_comic as $comic){
            $st_comic = new Comic();
            $st_comic -> title = $comic['title'];
            $st_comic -> description = $comic['description'];
            $st_comic -> thumb = $comic['thumb'];
            $st_comic -> price = $comic['price'];
            $st_comic -> series = $comic['series'];
            $st_comic -> sale_date = $comic['sale_date'];
            $st_comic -> type = $comic['type'];
            $st_comic -> save();
        }
    }
}
