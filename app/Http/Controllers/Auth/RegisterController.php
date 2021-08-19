<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\Customer\Registered;
use App\Payments;
use App\Providers\RouteServiceProvider;
use App\Sponsorships;
use App\TmpUser;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Image;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://geo.api.gouv.fr/departements');
        $departments = json_decode($request->getBody()->getContents(), true);
        // dd($departments);
        return view('pages.Front.register', compact('departments'));
    }
    public function index(){
        return view('pages.Admin.User.index') ->with('users', User::all());
    }

    public function register (Request $request) {
        if ($this->validator( $request->all())->fails()) {
            return Redirect()->back()
            ->withInput()
                ->withErrors($this->validator($request->all())->errors());
        }

        $request['password']=Hash::make($request['password']);
        $request['is_coach'] = $request['is_coach'] =='on'?1:0;
        $request['email_verified_at'] = Carbon::now();

        $originalImage = $request->file('image_path');
        if ($originalImage != null) {
            $thumbnailImage = Image::make($originalImage);
            $originalPath = public_path() . '/assets/images/';
            $time = time();
            $thumbnailImage->save($originalPath . $time . $originalImage->getClientOriginalName());
            $request->merge(['image' => $time . $originalImage->getClientOriginalName()]);
        }
        $user = User::create($request->toArray());
        return  Redirect()->route('login')->with('success','Votre compte est créé, veuillez vous connecter !');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        dd($data);
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

}
