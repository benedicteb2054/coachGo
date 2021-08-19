<?php

namespace App\Http\Controllers;

use App\Sponsorships;
use App\User;
use Auth;
use Illuminate\Http\Request;

class SponsorshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Sponsorships::where('user_id', Auth::user()->id)->with('user')->get();
        dd("$user");
        return view("pages.Admin.Sponsorship.index")
        ->with('row', $user);
    }

    public function sponsorship()
    {
        $user = User::where('id', Auth::user()->id)->with(['sponsorships.user'])->get();
        $earnings=array_sum(array_column($user->toArray()[0]['sponsorships'], 'earnings'));
        // dd($earnings);
        return view("pages.Admin.Sponsorship.index")
                ->with('rows', $user->toArray())
                ->with('total_earnings', $earnings);
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
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsorships $sponsorships)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsorships $sponsorships)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsorships $sponsorships)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsorships $sponsorships)
    {
        //
    }

    public function signup($id){
        // dd($id);
        return redirect()->route('sponsorship.register', ['token' => $id]);
    }
}
