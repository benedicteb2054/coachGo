<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Earnings;
use App\OfferCategories;
use App\Offers;
use App\Services;
use Auth;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.Admin.Agenda.index");
    }
    public function getCoachEvents($id){
        $event =    Agenda::where('user_id',$id)->get();
        return response()->json($event);
    }
    public function getEvents()
    {
        $event =    Agenda::where('user_id',Auth::user()->id)->get();
        return response()->json($event);
    }

    public function removeEvent($id){
        // dd($id);
        $agenda=Agenda::find($id);
        $agenda->delete();
        return response()->json(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->merge(['user_id'=>Auth::user()->id]);
        Agenda::create($request->all());
        // $req=$request->except('token');
        // $offer=Offers::updateOrCreate(['id' =>  request('id')],$req );
        return back()->withInput()->with('success','L\'offre a été éditer avec succès');
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
     * Display the offers from selected category.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */

    public function category_offers( $id)
    {
        return view("pages.Front._offersModalContent")->with('offers', Offers::where('offer_category_id',$id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Earnings  $earnings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offers::findOrFail($id);
        return view("pages.Admin.Offers.create")->with('offer',$offer)
        ->with('categories',  OfferCategories::all())
                ->with('services',  Services::all());

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
