<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory(10)->create();
    }
}
