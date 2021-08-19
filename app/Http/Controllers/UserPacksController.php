<?php

namespace App\Http\Controllers;

use App\Investments;
use App\Markets;
use App\Packs;
use App\UserPacks;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserPacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdmin()){
            return view("pages.Admin.UserPack.index")
            ->with('userPack', UserPacks::where("status","non-invest")->get());
        }else{
            return view("pages.Admin.UserPack.index")
                ->with('userPack', UserPacks::where("status","non-invest")
                ->where("user_id", Auth::user()->id)->get());
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.Admin.Pack.create")->with('pack', new Packs());
    }

    public function availableList(){
        return view("pages.Admin.Pack.index")
                ->with('userPack', Packs::where('is_active',1)->get());
    }

    public function ownerPack (){
        return view("pages.Admin.UserPack.index")
                ->with('userPack', UserPacks::where('user_id',Auth::user()->id))->with('user');

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
        Packs::updateOrCreate(['id' =>  request('id')],$req );
        return back()->withInput()->with('success','Le pack a été éditer avec succès');
    }





    public function invest(Request $request){
        $userPack = UserPacks::with('pack')->get()->find($request->id);

        // $investment = Investments::where('user_pack_id',$request->id)->get()->first();
        $investment = Investments::where('pack_id',$userPack->pack_id)
                    ->where('user_id', Auth::user()->id)
                    ->where('created_at',Carbon::now()->format('Y-m-d'))
        ->count();
        $opened_market=Markets::latest()->first();
        if($opened_market->closed==true){
            return back()->withInput()->with('error','Désolé le marché n\'est pas encore ouvert pour effectuer un investissement');
        }

        if(isset($investment) && $investment >= 3){
            return back()->withInput()->with('error','Ce pack ne peut plus être investis, vous avez atteind le quota d\'investissement pour ce pack');
        }
        Investments::create([
            'user_pack_id'=>$request->id,
            'user_id'=>Auth::user()->id,
            'pack_id'=>$userPack->pack->id,
            'market_id'=>$opened_market->id
        ]);
        $userPack->status=UserPacks::INVEST;
        $userPack->save();

        return back()->withInput()->with('success',"Le pack a été investis ");

    }
}
