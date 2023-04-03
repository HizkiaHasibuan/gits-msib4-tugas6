<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $data['title'] = 'Home';
        $data['products'] = Product::all();

        return view('index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Product';
        $data['products'] = Product::all();
        $data['categories'] = Category::all();

        return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Product';
        $data['categories'] = Category::all();

        return view('product.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'productName' => 'required',
            'productPrice' => 'required',
            'productCategory' => 'required',
            'productDescription' => 'required'
        ]);

        Product::create([
            'name'=> $validated['productName'],
            'price'=> $validated['productPrice'],
            'category_id'=> $validated['productCategory'],
            'description'=> $validated['productDescription']
        ]);

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $id)
    {
        $data['title'] = 'Edit Product';
        $data['products'] = Product::find($id);
        $data['categories'] = Category::all();

        return view('product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $id)
    {
        $validated = $request->validate([
            'productName' => 'required',
            'productPrice' => 'required',
            'productCategory' => 'required',
            'productDescription' => 'required'
        ]);

        $no=1;
        if ($no == 2) {
            dd($id);
        }
        

        Product::where('id', $id->id)->update([
            'name' => $validated['productName'],
            'price' => $validated['productPrice'],
            'category_id' => $validated['productCategory'],
            'description' => $validated['productDescription']
        ]);

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/product');
    }
}
