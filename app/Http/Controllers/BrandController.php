<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{ public function viewPDF()
    {
        $brand = Brand::latest()->get();

        $data = [
            'title' => 'Data brand',
            'date' => date('m/d/Y'),
            'brand' => $brand,
        ];

        // $pdf = PDF::loadView('brand.export-pdf', $data)
            // ->setPaper('a4', 'portrait');
        // return $pdf->stream();
    }


 public function index()
 {
  $brand = Brand::latest()->paginate(5);
  return view('brand.index', compact('brand'));
 }

 public function create()
 {
  return view('brand.create');
 }

 public function store(Request $request)
 {
  //validate form
  $this->validate($request, [
   'nama_brand'      => 'required|min:5',
  ]);

  $brand            = new Brand();
  $brand->nama_brand      = $request->nama_brand;
//   // upload image
//   $image = $request->file('image');
//   $image->storeAs('public/brands', $image->hashName());
//   $brand->image = $image->hashName();
  $brand->save();
  return redirect()->route('brand.index');
 }

 public function show($id)
 {
  $brand = Brand::findOrFail($id);
  return view('brand.show', compact('brand'));
 }

 public function edit($id)
 {
  $brand = Brand::findOrFail($id);
  return view('brand.edit', compact('brand'));
 }

 public function update(Request $request, $id)
 {
  $this->validate($request, [
   'nama_brand'      => 'required|min:5',
  ]);

  $brand            = Brand::findOrFail($id);
  $brand->nama_brand      = $request->nama_brand;
//   // upload image
//   $image = $request->file('image');
//   $image->storeAs('public/brands', $image->hashName());
//   //delete old image
//   Storage::delete('public/brands/' . $brand->image);

//   $brand->image = $image->hashName();
  $brand->save();
  return redirect()->route('brand.index');

 }

 public function destroy($id)
 {
  $brand = Brand::findOrFail($id);
  $brand->delete();
  return redirect()->route('brand.index');

 }
}
