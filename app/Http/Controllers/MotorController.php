<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$motors = Motor::all()->toArray(); */
        $motors = Motor::paginate(4);
        return view('v2.index', compact('motors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v2.create');
    }

    public function find(Request $request)
    {
        // $products = Sepedamotor::all()->toArray();
        $find = $request->keyword;
        $motors = Motor::where('merk', 'like', "%".$find."%")->paginate();
        return view('v2.index', compact('motors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = $this->validate(request(), [
            'merk' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required',
            'weight' => 'required|numeric'
            ]);
            Motor::create($motor);
            //return back()->with('success', 'Sepeda Motor has been added');;
            return redirect('v2')->with('success', 'Sepeda Motor has been added');;  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::find($id);
        return view('v2.show', compact('motor','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::find($id);
        return view('v2.edit',compact('motor','id'));
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
        $motor = Motor::find($id);
        $this->validate(request(), [
        'merk' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required',
        'weight' => 'required|numeric'
        ]);
        $motor->merk = $request->get('merk');
        $motor->price = $request->get('price');
        $motor->stock = $request->get('stock');
        $motor->weight = $request->get('weight');
        $motor->save();
        return redirect('v2')->with('success','Sepeda Motor has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::find($id);
        $motor->delete();
        return redirect('v2')->with('success','Sepeda Motor has been deleted');
    }
}
