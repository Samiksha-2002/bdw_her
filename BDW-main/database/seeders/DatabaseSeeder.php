<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            \Modules\Category\database\seeders\CategoryDatabaseSeeder::class,
            \Modules\MindSet\database\seeders\MindsetQuestionsTableSeeder::class,
            \Modules\MindSet\database\seeders\MindsetQuestionOptionsTableSeeder::class,
            \Modules\MindSet\database\seeders\MindsetQuestionOptionAnswersTableSeeder::class,
            \Modules\Setting\database\seeders\SettingDatabaseSeeder::class,
            \Modules\Type\database\seeders\TypeDatabaseSeeder::class,
            \Modules\User\database\seeders\UserDatabaseSeeder::class,
            \Modules\Videos\database\seeders\VideosDatabaseSeeder::class,
        ]);
    }
}
