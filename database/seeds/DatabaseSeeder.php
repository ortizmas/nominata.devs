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
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesAndPermissions::class);
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(ModuleTableSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(SaleTableSeeder::class);
        $this->call(UnionsTableSeeder::class);
    }
}
