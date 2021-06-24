<?php

namespace App\Http\Controllers;

use App\Models\callback;
use App\Models\Country;
use App\Models\SiteDetail;
use App\Models\Tours;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.home');
    }

    public function Country(){
        $country = Country::all();
        return view('Admin.add', compact('country'));
    }

    public function storeCountry(Request $request){

        if($request->hasFile('image')){
            $image=$request->file('image');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('files'), $imageName);
        }

        $country = new Country();
        $country->name=$request->name;
        $country->image=$imageName;
        $country->save();

        return back();
    }

    public function showCountry(Request $request){
        $country = Country::find($request->id);
        return view('Admin.edit_country', compact('country'));
    }


    public function updateCountry(Request $request){
        $image=$request->file('image');
        $imageName='';
        if($image){
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('files'), $imageName);
        }
        $country = Country::find($request->id);
        $country->name=$request->name;
        if($imageName){
            unlink(public_path('files').'/'.$country->image);
            $country->image=$imageName;
        }

        $country->save();

        return back();
    }


    public function destroyCountry(Request $request){
        $country = Country::find($request->id);
        $country->delete();
        return back();
    }



    public function Tour(){
        $country = Country::all();
        $tour = Tours::all();
        return view('Admin.add_tour', compact('country', 'tour'));
    }

    public function storeTour(Request $request){
        if($request->hasFile('img')){
            $image=$request->file('img');
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('files'), $imageName);
        }

        $tour = new Tours();
        $tour->title=$request->title;
        $tour->country_id=$request->country_id;
        $tour->description=$request->description;
        $tour->price=$request->price;
        $tour->day=$request->day;
        $tour->img=$imageName;

        $tour->save();

        return back();
    }


    public function showTour(Request $request){
        $tour = Tours::find($request->id);
        $country= Country::all();
        return view('Admin.edit_tour', compact('tour', 'country'));
    }


    public function updateTour(Request $request){
        $image=$request->file('img');
        $imageName='';
        if($image){
            $imageName=time().'.'.$image->extension();
            $image->move(public_path('files'), $imageName);
        }

        $tour = Tours::find($request->id);
        $tour->title=$request->title;
        $tour->country_id=$request->country_id;
        $tour->description=$request->description;
        $tour->price=$request->price;
        $tour->day=$request->day;
        if($imageName){
            unlink(public_path('files').'/'.$tour->img);
            $tour->img=$imageName;
        }

        $tour->save();

        return back();
    }


    public function destroyTour(Request $request){
        $tour = Tours::find($request->id);
        $tour->delete();

        return back();
    }

    public function Detail(){
        $detail = SiteDetail::all();
        return view('Admin.site_detail', compact('detail'));
    }

    public function storeDetail(Request $request){
        $detail = new SiteDetail();
        $detail->phone=$request->phone;
        $detail->addres=$request->addres;

        $detail->save();

        return back();
    }

    public function showDetail(Request $request){
        $detail = SiteDetail::find($request->id);
        return view('Admin.site_detail_edit', compact('detail'));
    }

    public function updateDetail(Request $request){
        $detail = SiteDetail::find($request->id);
        $detail->phone=$request->phone;
        $detail->addres=$request->addres;

        $detail->save();

        return back();
        }

        public function callback(Request $request){
            $call = new callback();
            $call->phone=$request->phone;
            $call->date=$request->date;
            $call->place=$request->place;

            $call->save();

            return back();
        }
}
