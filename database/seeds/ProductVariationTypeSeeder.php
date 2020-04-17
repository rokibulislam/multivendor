<?php

use Illuminate\Database\Seeder;

class ProductVariationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductVariationType::class, 10)->create();
        
    }
}
