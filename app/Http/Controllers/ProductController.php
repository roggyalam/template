<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
      public function viewPDF()
    {
        $product = Product::latest()->get();

        $data = [
            'title' => 'Data Product',
            'date' => date('m/d/Y'),
            'product' => $product,
        ];

        // $pdf = PDF::loadView('product.export-pdf', $data)
        //     ->setPaper('a4', 'portrait');
        // return $pdf->stream();
    }


 public function index()
 {
  $product = Product::latest()->paginate(5);
  return view('product.index', compact('product'));
 }

 public function create()
 {
  return view('product.create');
 }

 public function store(Request $request)
 {
  //validate form
  $this->validate($request, [
   'name_product'      => 'required|min:5',
   'stock'     => 'required',
   'price'     => 'required',
   'description' => 'required|min:10',
   'id_brand' => 'required',
  ]);

  $product            = new Product();
  $product->name_product      = $request->name_product;
  $product->stock     = $request->stock;
  $product->price = $request->price;
  $product->description = $request->description;
  $product->id_brand = $request->id_brand;


  // upload image
//   $image = $request->file('image');
//   $image->storeAs('public/products', $image->hashName());
//   $product->image = $image->hashName();
  $product->save();
  return redirect()->route('product.index');
 }

 public function show($id)
 {
  $product = Product::findOrFail($id);
  return view('product.show', compact('product'));
 }

 public function edit($id)
 {
  $product = Product::findOrFail($id);
  return view('product.edit', compact('product'));
 }

 public function update(Request $request, $id)
 {
  $this->validate($request, [
   'name_product'      => 'required|min:5',
   'stock'     => 'required',
   'price'     => 'required',
   'description' => 'required|min:10',
   'id_brand' => 'required',
  ]);

  $product            = new Product();
  $product->name_product      = $request->name_product;
  $product->stock     = $request->stock;
  $product->price = $request->price;
  $product->description = $request->description;
  $product->id_brand = $request->id_brand;
  // upload image
//   $image = $request->file('image');
//   $image->storeAs('public/products', $image->hashName());
//   //delete old image
//   Storage::delete('public/products/' . $product->image);

//   $product->image = $image->hashName();
  $product->save();
  return redirect()->route('product.index');

 }

 public function destroy($id)
 {
  $product = Product::findOrFail($id);
//   Storage::delete('public/products/' . $product->image);
  $product->delete();
  return redirect()->route('product.index');

 }
}
