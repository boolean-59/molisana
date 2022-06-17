<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $prodotti = Product::all();
       return view('products.index', compact('prodotti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        // dump($data);
        $newProduct = new Product();
        $newProduct = Product::create($data);
        // $newProduct->fill($data);

        // $newProduct->title = $data['title'];
        // if(!empty($data['description'])){
        //     $newProduct->description = $data['description'];
        // }
        // $newProduct->type = $data['type'];
        // $newProduct->image = $data['image'];
        // $newProduct->cooking_time = $data['cooking_time'];
        // $newProduct->weight = $data['weight'];

    //    $newProduct->save();

       return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
       //$product = Product::find($id);
       //dump($prodotto);
    //    if($product){

    //    }
    //    abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       // $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        //$product = Product::findOrFail($id);
        // $product->title = $data['title'];
        // $product->description = $data['description'];
        // $product->type = $data['type'];
        // $product->image = $data['image'];
        // $product->cooking_time = $data['cooking_time'];
        // $product->weight = $data['weight'];

        $product->update($data);

        return redirect()->route('products.show',$product->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //$product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
