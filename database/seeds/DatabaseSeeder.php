<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CategoryPhotoTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(PackagePhotoTableSeeder::class);

        Model::reguard();
    }
}
