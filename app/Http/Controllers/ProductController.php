<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(12);
        return view('user_Products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->has('name')? $request->get('name'):'';
        $product->category = $request->has('cbxCategory')? $request->get('cbxCategory'):'';
        $product->price = $request->has('price')? $request->get('price'):'';
        $product->qty = $request->has('qty')? $request->get('qty'):'';
        $product->isActive = 1;

        if($request->has('images'))
        {
            $files = $request->file('images');
            $imgLocation = array();
            $i=0;
            foreach($files as $file)
            {
                $extention = $file->getClientOriginalExtension();
                $fileName = 'product-'. time() . ++$i . '.' . $extention;
                $location = '/img/products/';
                $file->move(public_path(). $location , $fileName);
                $imgLocation[] = $location . $fileName;
            }

            $product->image=implode('|', $imgLocation);
            $product->save();
            return back()->with('success','Product save successfully.');
        }
        else
        {
            return back()->with('error','Products save un-successfully.');
        }
    }

    public function showProduct()
    {
        $allProduct = Product::all();
        $ShowProduct = array();
        foreach($allProduct as $row)
        {
            $image = explode('|', $row->image);
            $ShowProduct[] = [
                'name'=>$row->name,
                'price'=>$row->price,
                'qty'=>$row->qty,
                'image'=>$image[0]
            ];
        }
        return view('addProduct', compact('ShowProduct'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $images = explode('|', $product->image);
        $related_products = Product::where('category',$product->category)->where('id','!=',$product->id)->limit(3)->get();
        return view('productDetail', compact('product','related_products','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
