<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabel21;

class Tabel21Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabel21s = Tabel21::all()->toArray();
        return view('v3.index', compact('tabel21s'));
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
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kode)
    {
        $tabel21 = Tabel21::find($Kode);
        return view('v3.edit', compact('tabel21','Kode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kode)
    {
        $tabel21 = Tabel21::find($Kode);
        $this->validate(request(), [
            'namatabel21' => 'required',
            'jumlahtabel21' => 'required',
            'satuantabel21' => 'required'
        ]);

        $tabel21->namatabel21 = $request->get('namatabel21');
        $tabel21->jumlahtabel21 = $request->get('jumlahtabel21');
        $tabel21->satuantabel21 = $request->get('satuantabel21');
        $tabel21->save();
        return redirect('v3')->with('success','Tabel21 has been updated');
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
