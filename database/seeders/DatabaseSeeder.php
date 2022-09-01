<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Store;
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
        Store::factory(3)
            ->has(Category::factory(3)->hasProducts(3,function (array $attrs,Category $category){
                $attrs['store_id'] = $category->store_id;
                return $attrs;
        }))->create();
    }
}
