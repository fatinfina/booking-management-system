<?php

namespace App\Http\Controllers\venue;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\venue\Venue;

class venueController extends Controller
{
    public function index()
    {
        $venue_data= Venue::all();
        return view ('venue.displayVenue', [
         "venue_data" => $venue_data,
        ]);
    }

    public function add()
    {
        return view ('venue.addVenue', [

        ]);
    }

    public function store(Request $request)
    {
        $venue= new Venue;
        $venue->venue_name= $request->input('name');
        $venue->location= $request->input('location');
        $venue->created_at = now();

        $this->validate($request,[
            'name'=>'required'

        ]);
        $venue->save();
        Session::flash('success', 'data added');
        return redirect()->route('venue.index');
    }

    public function delete($id)
    {
        $venue= Venue::where('venue_id',$id)->first();

        Venue::where('venue_id',$id)->delete();
        
        Session::flash('success', 'Successfully delete data');
        return redirect()->back();

    }
}
