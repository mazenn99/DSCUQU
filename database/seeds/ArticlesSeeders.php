<?php

use Illuminate\Database\Seeder;

class ArticlesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Articles::class , 130)->create();
    }
}
