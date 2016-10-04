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
      factory(App\User::class)->create([
        'name' => 'Daniel Tarazona',
        'nickname' => 'xYz',
        'email' => 'admin@admin.com',
        'password' => bcrypt("123456")
      ]);

      factory(App\Category::class)->create(['name' => 'UIX']);
      factory(App\Category::class)->create(['name' => 'Front-end']);
      factory(App\Category::class)->create(['name' => 'Machine Learning']);
      factory(App\Category::class)->create(['name' => 'Back-end']);
      factory(App\Category::class)->create(['name' => 'JavaScript']);
      factory(App\Category::class)->create(['name' => 'PHP']);
      factory(App\Category::class)->create(['name' => 'Architecture']);
      factory(App\Category::class)->create(['name' => 'Games']);
      factory(App\Category::class)->create(['name' => 'Mathematics']);
      factory(App\Category::class)->create(['name' => 'Computer Science']);
      factory(App\Category::class)->create(['name' => 'Hacking']);
      factory(App\Category::class)->create(['name' => 'Data Analyst']);
      factory(App\Category::class)->create(['name' => 'High Performance Computer']);
      factory(App\Category::class)->create(['name' => 'Apple Developer']);
      factory(App\Category::class)->create(['name' => 'Operating Systems']);
      factory(App\Category::class)->create(['name' => 'Programming Languages']);
      factory(App\Category::class)->create(['name' => 'Computer Graphics']);
      factory(App\Category::class)->create(['name' => 'Robotics']);
      factory(App\Category::class)->create(['name' => 'Body Training']);

    }
}
