<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dangerzone;
use App\Models\Mineral;


class DangerzoneController extends Controller
{
    public function list(){

        $zones = Dangerzone::all(); 
        $zones = Dangerzone::with('minerals')->get();
                    
        return view('zone', ['zones' => $zones]);
    }

    public function create(Request $request){
    
        $minerals = Mineral::all();

        if($request->isMethod('POST')){
            $zone = new Dangerzone;
            
            $minerals = $request->input('minerals');
            
            $zone->location_lat = $request->input('location_lat');
            $zone->location_long = $request->input('location_long');
            $zone->danger_lvl = $request->input('danger_lvl');
            $zone->reported_on = $request->input('reported_on');
            $zone->save();
          
            $zone->minerals()->sync($minerals);

            return redirect('/');
        } else {
            
        }
        return view('create', ['minerals' => $minerals]);
    }   
    
}
