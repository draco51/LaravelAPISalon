<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\FreelancerProfile::class,10)->create();
        factory(App\Model\Skill::class,20)->create();
        factory(App\Model\Qualitification::class,25)->create();
        factory(App\Model\Calendar::class,300)->create();
    }
}
