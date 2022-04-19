<?php

use App\Tag;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['gabriele', 'simone', 'matteo', 'lorenzo'];

        foreach($tags as $tag) {

            $newCategory = new Tag();
            $newCategory->name = $tag;
            $newCategory->slug = Str::slug($tag);
            $newCategory->save();

        }

    }
}
