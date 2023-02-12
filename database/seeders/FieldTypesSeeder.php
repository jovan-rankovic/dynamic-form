<?php

namespace Database\Seeders;

use App\Models\FieldType;
use Illuminate\Database\Seeder;

class FieldTypesSeeder extends Seeder
{
    public function run()
    {
        FieldType::create(['type' => 'text']);
        FieldType::create(['type' => 'amount']);
        FieldType::create(['type' => 'date']);
    }
}
