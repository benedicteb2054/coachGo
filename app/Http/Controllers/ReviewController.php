<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Review;
use App\User;
use App\UserPacks;
use Auth;
use Illuminate\Http\Request;
use Validator;

class ReviewController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('veri');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //review xxx
    public function index(Request $request)
    {
        return view("pages.Front.reviews")
                ->with('reviews', Review::paginate(40));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,RegisterController $registerCtrl)
    {
        $request->merge(['user_id'=>Auth::user()->id]);
        $req=$request->except('token');
        $r=Review::updateOrCreate(['id' =>  request('id')],$req );
        return back()->withInput()->with('success','Votre avis  a été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {

    }



    protected function validator( $data)
    {
        // dd($data);
        return Validator::make($data, [
            'content' => ['required', 'string', 'max:255'],
                   ]);
    }
}
