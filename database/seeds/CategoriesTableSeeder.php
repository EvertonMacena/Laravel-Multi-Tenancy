<?php

use App\Category;
use App\Company;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(Company::find(1));
        factory(Category::class, 50)->create();

        \Tenant::setTenant(Company::find(2));
        factory(Category::class, 50)->create();
    }
}
