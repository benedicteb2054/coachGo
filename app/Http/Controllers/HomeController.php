<?php

namespace App\Http\Controllers;

use App\OfferCategories;
use App\Review;
use App\Services;
use App\Slider;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // const chaine_valeur=['riz', 'maïs', 'maraichage'];

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(request()->routeIs('admin.home')){
            return view('pages.Admin.home');
        }
        $sliders = Slider::with('featuredImage:path,imageable_id,imageable_type')->orderBy('order', 'asc')->get()->toArray();
        $categories= OfferCategories::all();
        // $services = Services::all();
        $users = User::where('is_coach',1)->limit(6)->get();
        $reviews = Review::limit(6)->get();

        return view('pages.Front.home', compact( 'sliders','categories','users', 'reviews'));
    }

    public function cgu(){
        return view('pages.Front.cgu');
    }
    public function mentionLegal(){
        return view('pages.Front.mention-legal');
    }
    public function faq(){
        return view('pages.Front.faq');
    }

}
