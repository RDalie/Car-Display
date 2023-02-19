<?php

namespace App\Http\Controllers;
use Validator;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(2);

        return view('allcars', ['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $validator = Validator::make($request->all(), [
            'carName' => 'required',
            'carPrice' => 'required',
            'carDescription' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('cars.create')->withErrors($validator)->withInput();
        };

        $car = new Car;
        $car->carName = $request->carName;
        $car->description = $request->carDescription;
        $car->price = $request->carPrice;
        $car->save();

        return redirect()->route('cars.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function search(Request $request) {


        $name = $request->search;

        

        $cars = Car::where('carName','Like','%' . $name . '%')->paginate(2);
        

        return view('carsbyname', ['cars'=>$cars]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecars(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'carName' => 'required',
            'body' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('update')->withErrors($validator)->withInput();
        };

         $car = Car::find($request->id);
         $car->carName = $request->carName;
         $car->description = $request->carDescription;
         $car->price = $request->carPrice;
         $car->save();
         return redirect()->route('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
