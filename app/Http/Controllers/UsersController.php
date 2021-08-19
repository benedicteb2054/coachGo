<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Roles;
use App\Sponsorships;
use App\TmpUser;
use App\User;
use App\UserPacks;
use Auth;
use Illuminate\Http\Request;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //review xxx
    public function index(Request $request)
    {
        if(request()->status =="approved"){
            $tmp_user=TmpUser::all()[0];
            $user_tmp_arr = array_merge($tmp_user->toArray(),[
                'password'=>bcrypt('password'),
                'verification_token'=>uniqid(4),
                'sponsorship_code'=>uniqid(4),
                'phone_no'=>$tmp_user->full_number
            ]);

            $user = User::create($user_tmp_arr);
            // dd($tmp_user->pa_code);
            if($tmp_user->pa_code){
                $sponsor = User::where('sponsorship_code', $tmp_user->pa_code)->first();
                Sponsorships::create([
                    'sp_id'=>$sponsor->id,
                    'pa_id'=>$user->id,
                    'earnings'=>200
                ]);

            }

            return view("pages.Admin.User.index")
                ->with('success','Utilisateur créé avvec succès')
                ->with('users', User::admin()->manager()->get());
        }

        if($request->routeIs('partenaires.index')){
            // dd( User::investor()->with('role')->get());
            return view("pages.Admin.User.index")
                ->with('partenaires', User::investor()->get());
        }
        return view("pages.Admin.User.index")
                ->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.Admin.User.create")
        ->with('pa_code',Auth::user()->sponsorship_code)
        ->with('roles',Roles::whereNotIn('name',['Super Administrateur'])->pluck('id','name'))
        ->with('user' , new User());
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
        if ($this->validator( $request->all())->fails()) {
            return Redirect()->back()
                ->withInput()
                ->withErrors($this->validator($request->all())->errors());
        }
        if($request->id){
            User::whereId($request->id)->update($request->except(['_token','pa_code']));
            return Redirect()->back()
                ->withInput()
                ->with('success','Mise à jour effectué avec succès');
        }

        if ($request->role_id == Roles::MANAGER) {
            User::create($request->all());
            return Redirect()->back()
                    ->withInput()
                    ->with('success','Mise à jour effectué avec succès');
        }

        $token=$registerCtrl->register($request,true);
        return redirect($token->url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $user = User::where('id',$id)->with("investments")->get()->first();
        $sponsorship=Sponsorships::where('sp_id',$id)->get()->first();
        $user_packs=UserPacks::where('user_id',$id)->get()->first();
        // dd($sponsorship);
        return view("pages.Admin.User.detail")
            ->with('user',$user)
            ->with('total_gains',$user->investments()->get()->sum("earnings"))
            ->with('total_invest',12)
            ->with('gains_parrainnage',$sponsorship ? $sponsorship->sum('earnings') : 0)
            ->with('nb_fieuls',$sponsorship ? $sponsorship->count() : 0)
            ->with('nb_buyed_packs',$user_packs? $user_packs->count() : 0);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponsorships  $sponsorships
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        // dd($packs);
        $user = User::findOrFail($user);
        // dd($user->birthdate);
        return view("pages.Admin.User.create")
        ->with('roles',Roles::whereNotIn('name',['Super Administrateur'])->pluck('id','name'))
        ->with('pa_code',Auth::user()->sponsorship_code)
        ->with('user',$user);
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
