<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Models\Customer;
use App\User;
use App\Roles;
use App\User as AppUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        // $customer = $user->customer->with('featuredImage', 'images')->first();
        return view("pages.Admin.User.account")
            ->with('user',$user)
            ;
    }

    /**
     * Update profile informations.
     *
     * @return
     */
    public function profile(Request $request)
    {
        $req=$request->except('token');
        $customer=User::updateOrCreate(['id' =>  request('id')],$req );
        if ($request->hasFile('selfie'))
            $s=$customer->saveImage($request->file('selfie'));

        if ($request->hasFile('document_path'))
            $customer->saveImage($request->file('document_path'));

        return  back()
            ->withInput(['tab'=>'kt_user_edit_tab_1'])
            ->with('success',"La modification s'est effectué avec succès");
    }

    /**
     * Store a newly created resource or update it in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('vv');
        $req=$request->except('token');
        $user=User::updateOrCreate(['id' =>  request('id')],$req );
        return  back()
        ->withInput(['tab'=>'kt_user_edit_tab_2'])
        ->with('success',"La modification s'est effectué avec succès");
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
    public function edit()
    {

    }



    protected function validator( $data)
    {
        return Validator::make($data, [
            'lastname' => ['required', 'string', 'max:255'],
            'email' => 'unique:users,email,'.$data['id'].',id',
            'firstname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'string', 'min:6','unique:users,phone_no,'.$data['id'].',id'],
        ]);
    }
}
