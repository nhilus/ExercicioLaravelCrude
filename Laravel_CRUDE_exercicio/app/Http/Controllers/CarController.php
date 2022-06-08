<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $cars = Car::where('name', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->paginate(10);
        }else{
            $cars = Car::orderBy('id', 'desc')->paginate(10);
        }

        return view('pages.cars.index', ['cars'=> $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.cars.create',['brands'=> \App\Brand::all()] );
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
            'brand_id'              => 'required',
            'registration'          => 'required',
            'year_of_registration'  => 'required',
            'color'                 => 'required'
        ]);

        //Player::create($request->all());
        $car                            = new Car();
        $car ->brand_id                 = $request->brand_id;
        $car ->registration             = $request->registration;
        $car ->year_of_registration     = $request->year_of_registration;
        $car ->color                    = $request->color;
        $car ->save();

        return redirect('cars')->with('status','Car added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('pages.cars.show', ['car' => $car]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {

        return view('pages.cars.edit', ['car' => $car, 'brands'=> \App\Brand::all()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return redirect('cars')->with('status','Car updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('cars')->with('status','Car deleted successfully!');;
    }

    public function truncate()
    {
        Player::truncate();
        return redirect('cars')->with('status','Cars deleted successfully!');;
    }

    /**
     * Show records
     *
     * @return \Illuminate\Http\Response
     */


}



