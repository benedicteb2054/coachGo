<?php

namespace App\Http\Controllers;

use App\Earnings;
use App\OfferCategories;
use Illuminate\Http\Request;

class OfferCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.Admin.OfferCategories.index")
        ->with('categories', OfferCategories::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.Admin.OfferCategories.create")
            ->with('category', new OfferCategories());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req=$request->except('token');
        $categories=OfferCategories::updateOrCreate(['id' =>  request('id')],$req );
        return back()->withInput()->with('success','La categorie a été éditer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function show(Earnings $earnings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = OfferCategories::findOrFail($id);
        return view("pages.Admin.OfferCategories.create")->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Earnings $earnings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Earnings $earnings)
    {
        //
    }
}
