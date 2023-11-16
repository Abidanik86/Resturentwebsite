<?php

namespace Database\Seeders;

use App\Models\Mealcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealcategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mealcategory::create(['id' => '1','categoryname' => 'Breakfast']);
        Mealcategory::create(['id' => '2','categoryname' => 'Lunch']);
        Mealcategory::create(['id' => '3','categoryname' => 'Dinner']);
    }
}
