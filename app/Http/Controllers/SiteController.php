<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\SiteDetail;
use App\Models\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{
    public function __construct() {
        View::share ( 'countries',  Country::all());
        view()->share('detail', SiteDetail::all());
     }  
    public function index(){
        $country = Country::all();
        $tour = Tours::latest()->limit(3)->get();
        return view('welcome', compact('country', 'tour'));
    }


    public function about(){
        $country = Country::all();
        return view('about', compact('country'));
    }
    // public function showMenu(Request $request){
    //     $country = Country::find($request->id);
    //     $tour = Tours::where('country_id', '=', $request->id )->latest()->get();
    //     return view('destination', compact('country','tour', ));
    // }
  

    public function show(Request $request){
        $country = Country::find($request->id);
        $tour = Tours::where('country_id', '=', $request->id )->latest()->get();
        // dd($tour, $country);
        return view('destination', compact('country','tour', ));
    }

    public function showTour(Request $request){
        $countrs = Country::all();
        $tour = Tours::find($request->id);
        return view('detail', compact('tour', 'countrs'));
       
    }

    public function contact(){
        return view('contact');
    }
}
