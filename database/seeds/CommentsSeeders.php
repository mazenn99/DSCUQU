<?php

use Illuminate\Database\Seeder;

class CommentsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Comments::class , 1500)->create();
    }
}
