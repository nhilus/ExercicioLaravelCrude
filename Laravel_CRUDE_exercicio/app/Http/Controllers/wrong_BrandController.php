<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */

    public function index()//Request $request//
    {
        /* = ($request->search) ?
            Brand::where('name', 'LIKE', '%'.request->search.'%')->orderBy('id', 'desc')-> paginate(10):
            Brand::orderBy('id', 'desc')->paginate(10);*/
        $brands = Brand::orderBy('id', 'desc')->get();

        return view('pages.brands.index', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('pages.brands.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
        ]);


        $brand                            = new Brand();
        $brand ->name                 = $request->name;
        $brand ->save();

        return redirect('brands')->with('status','Brand added successfully!');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */

    public function show(Brand $brand)
    {
        return view('pages.brands.show', ['brand' => $brand]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */


    public function edit(Brand $brand)
    {
        return view('pages.brands.edit', ['brand' => $brand]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Brand $brand)
    {
        $brand                            = Brand::find($brand->id);
        $brand ->name                       = $request->name;
        $brand ->save();

        return redirect('brands')->with('status','Brand edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */


    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('brands')->with('status','Brand deleted successfully!');;
    }

    public function truncate()
    {
        Brand::truncate();
        return redirect('brands')->with('status','Brands deleted successfully!');;
    }
}
