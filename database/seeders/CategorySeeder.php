<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name_en' => 'College library',
            'name_ar' => 'مكتبة الكلية'
        ]);

        Category::create([
            'name_en' => 'Electronic library',
            'name_ar' => 'المكتبة الالكترونية'
        ]);

        Category::create([
            'name_en' => 'Virtual library',
            'name_ar' => 'المكتبة الافتراضية'
        ]);

        Category::create([
            'name_en' => 'Applied research platform',
            'name_ar' => 'منصة البحوث التطبيقية'
        ]);

        Category::create([
            'name_en' => 'Iraqi scientific academic stores',
            'name_ar' => 'المحلات الاكاديمية العلمية العراقي'
        ]);
    }
}
