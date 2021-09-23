<?php

namespace App\Http\Controllers;

// use all data in models Pothole
use App\Models\Pothole;
use Illuminate\Http\Request;

class PotholeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // alt+z - untuk breakdown
        // all-dapatkan semua col dalam db
        $pothole = Pothole::all();
        // select-select few col based on apa kita nak
        $pothole_data = Pothole::select([ 'id', 'nameLoc', 'img' ]);
        return view('listing', [
            'potholes' => $pothole
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // keluar en form untuk masuk en data
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
    // untuk simpan data dalam db
    public function store(Request $request)
    {
        // dd - debug and die
        // dd($request);
        // store validated data as a new record
        $pothole = Pothole::create($request->all());

        if($request->has('img')){
            $pothole->update([ 'img' => $request->file('img')->store('images', 'public') ]);
        }

        return redirect()->route('pothole-listing');
        // return redirect()->route('pothole-listing')->with('success', 'Company has been created successfully.');
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
    public function update(Request $request, $id)
    {
        //
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
