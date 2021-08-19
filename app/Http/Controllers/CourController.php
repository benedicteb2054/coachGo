<?php

namespace App\Http\Controllers;

use App\Cour;
use Auth;
use Illuminate\Http\Request;

class CourController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.Admin.Cours.index")
        ->with('cours', Cour::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.Admin.Cours.create")
            ->with('cour', new Cour());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['coach_id'=>Auth::user()->id]);
        $req=$request->except('token');
        // dd( Auth::user()->email);
        $cours=Cour::updateOrCreate(['id' =>  request('id')],$req );
        return back()->withInput()->with('success','Le type de cour a été éditer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $cour = Cour::findOrFail($id);
        return view("pages.Admin.Cours.create")->with('cour',$cour);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
