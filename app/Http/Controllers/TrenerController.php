<?php

namespace App\Http\Controllers;

use App\Models\Trener;
use Illuminate\Http\Request;
use App\Http\Resources\ResourceTrener;
use Illuminate\Support\Facades\Validator;

class TrenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treners = Trener::all();
        return ResourceTrener::collection($treners);
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
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function show(Trener $trener)
    {
        return new ResourceTrener($trener);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function edit(Trener $trener)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trener $trener)
    {
        $validator = Validator::make($request->all(), [
            'nazivSkole'=>'required|string',
            'jmbg'=>'required|integer',
            'imePrezime'=>'required|string',
            'godiste'=>'required|integer',
            'godineIskustva'=>'required|integer'
        ]);

        if($validator->fails()){
            return response()->json(['Greška prilikom ažuriranja trenera', $validator->errors()]);
        }

        $trener->nazivSkole = $request->nazivSkole;
        $trener->jmbg=$request->jmbg;
        $trener->imePrezime=$request->imePrezime;
        $trener->godiste=$request->godiste;
        $trener->godineIskustva=$request->godineIskustva;

        $trener->save();

        return response()->json(['Trener je ažuriran', new ResourceTrener($trener)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trener  $trener
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trener $trener)
    {
        $trener->delete();
        return response()->json(['Kurir je obrisan', new ResourceTrener($trener)]);
    }
}
