<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*public function edit($id)
    {
        $car = Car::findOrFail($id);
        $brands = Brand::all();

        return view('backend.dashboard.cars.edit', compact('brands', 'car'));
    }*/
}
