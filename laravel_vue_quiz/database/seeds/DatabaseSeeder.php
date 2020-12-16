<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            InformationTableSeeder::class,
            CategoryTableSeeder::class,
            QuizTableSeeder::class,
            AnswerTableSeeder::class,
            RankingTableDummySeeder::class,
        ]);
    }
}
