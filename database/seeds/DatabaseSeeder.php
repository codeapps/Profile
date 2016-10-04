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
      $this->call(UsersTableSeeder::class);
      $this->call(CategoriesTableSeeder::class);
      $this->call(CertificatesTableSeeder::class);
      $this->call(ClientsTableSeeder::class);
      $this->call(CoursesTableSeeder::class);
      $this->call(StudiesTableSeeder::class);
    }
}
