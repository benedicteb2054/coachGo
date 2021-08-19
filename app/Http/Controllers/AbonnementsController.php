<?php

namespace App\Http\Controllers;

use App\Abonnements;
use App\Investments;
use App\Markets;
use Auth;
use Illuminate\Http\Request;

class AbonnementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            return view("pages.Admin.Abonnement.index")
            ->with('abonnements', Abonnements::all());
        }else{
            return view("pages.Admin.Abonnement.index")
            ->with('abonnements', Abonnements::where('user_id',Auth::user()->id)->get());
        }
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
     * @param  \App\Investments  $investments
     * @return \Illuminate\Http\Response
     */
    public function show(Abonnements $abonnement)
    {
        //
    }



}
