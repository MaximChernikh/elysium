<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $countries = [
            'Российская Федерация' => ['code' => 'RU'],
            'Соединенные Штаты Америки' => ['code' => 'USA'],
        ];

        foreach ($countries as $el => $data) {
            $record = new Country();
            $record->name = $el;
            $record->code = $data['code'];
            $record->save();
        }
    }
}
