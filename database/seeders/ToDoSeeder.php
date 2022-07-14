<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("todos")->insert([
            [
                "id" => 1,
                "title" => "خرید کردن",
                "description" => "خرید نان و مواد غذایی",
                "categoryID" => 1,
            ]
        ]);

        DB::table("todos")->insert([
            [
                "id" => 2,
                "title" => "درس خواندن",
                "description" => "خواندن درس شیمی و فیزیک",
                "categoryID" => 2,
            ]
        ]);
    }
}
