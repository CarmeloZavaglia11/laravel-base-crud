<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cars = Car::all();
        
        return view('index',compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('create');

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

       $request->validate([
        'marca' => 'required|min:2|max:50',
        'modello' => 'required|min:2|max:50',
       ]);

       $carNew = new Car();
       $carNew->marca = $data['marca'];
       $carNew->modello = $data['modello'];
       $carNew->targa = $data['targa'];
       $carNew->prezzo = $data['prezzo'];
       $carNewSaved = $carNew->save();
       if ($carNewSaved) {
            return redirect()->route('cars.index');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        
        $data = $request->all();
        $car->update($data);

        if ($car) {
            return redirect()->route('cars.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $carDelete = $car->delete();

        if ($carDelete) {
            return redirect()->route('cars.index');
        }
    }
}
