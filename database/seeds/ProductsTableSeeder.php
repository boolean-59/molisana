<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodotti = config('pasta');
        foreach($prodotti as $prodotto){
            $newProduct = new Product();
            $newProduct->title = $prodotto['titolo'];
            $newProduct->description = $prodotto['descrizione'];
            $newProduct->type = $prodotto['tipo'];
            $newProduct->image = $prodotto['src'];
            $newProduct->cooking_time = $prodotto['cottura'];
            $newProduct->weight = $prodotto['peso'];
            $newProduct->save();
        }

    }
}
