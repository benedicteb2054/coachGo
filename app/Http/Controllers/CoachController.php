<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Reservation;
use App\Roles;
use App\User;
use App\UserPacks;
use Auth;
use Illuminate\Http\Request;
use Validator;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //review xxx
    public function index(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://geo.api.gouv.fr/departements');
        $departments = json_decode($request->getBody()->getContents(), true);
        return view("pages.Front.coach")
                 ->with('coachs', User::where('is_coach',1)->paginate(40))
                 ->with('departments',$departments);
    }

    public function search(Request $request){
        // dd($request->all());
        return   view("pages.Front.coach")
        ->with('coachs',User::search($request));
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
        // dd($this->validator($request->all())->errors());

        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $coach = User::where('id',$id)->with('cours')->get()->first();
        // dd($coach);
        return view("pages.Front.coach-detail", compact('coach'));
    }

    public function bookCoach(Request $request ){
        // dd($request->all());
        $request->merge(['customer_id'=>Auth::user()->id]);
        Reservation::create($request->all());
        return back()->with('success','Votre réservation à été enregistrée avec succès');
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
            'lastname' => ['required', 'string', 'max:255'],
            'email' => 'unique:users,email,'.$data['id'].',id',
            'firstname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'string', 'min:6','unique:users,phone_no,'.$data['id'].',id'],
        ]);
    }
}
