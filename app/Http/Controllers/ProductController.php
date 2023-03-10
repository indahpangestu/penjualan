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
        //$products = Product::all()->toArray(); //semua record muncul
        $products = Product::paginate(3);        //hanya sebagian record yg muncul
        return view('v1.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->validate(request(), [
            'name' => 'required',
            'price' => 'required|numeric',
            'stok' => 'numeric'
            ]);
            Product::create($product);
            //return back()->with('success', 'Product has been added');;
            return redirect('v1')->with('success', 'Product has been added');;  
    }

    public function cari(Request $request)
    {
        $cari = $request->keyword;
        $products = Product::where('name','like',"%".$cari."%")->paginate(5);
        return view('v1.index', compact('products'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('v1.show', compact('product','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('v1.edit', compact('product','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate(request(), [
            'name' => 'required',
            'price' => 'required|numeric',
            'stok' => 'numeric'
        ]);

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->stok = $request->get('stok');
        $product->save();
        return redirect('v1')->with('success','Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('v1')->with('success','Product has been deleted');
    }
}
