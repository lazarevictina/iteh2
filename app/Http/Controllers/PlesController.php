<?php

namespace App\Http\Controllers;

use App\Models\Ples;
use Illuminate\Http\Request;
use App\Http\Resources\ResourcePles;

class PlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plesovi=Ples::all();
        return ResourcePles::collection($plesovi);
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
     * @param  \App\Models\Ples  $ples
     * @return \Illuminate\Http\Response
     */
    public function show(Ples $ples)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ples  $ples
     * @return \Illuminate\Http\Response
     */
    public function edit(Ples $ples)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ples  $ples
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ples $ples)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ples  $ples
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ples $ples)
    {
        $ples->delete();
        return response()->json(['Ples je obrisan', new ResourcePles($ples)]);
    }
}
