<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allLanguages = config('languages');

        $languages = array_map(function ($prefix, $locale) {
            return [
                'prefix' => $prefix,
                'locale' => $locale
            ];
        }, array_keys($allLanguages), array_values($allLanguages));


        Language::query()->insert($languages);
    }
}
