<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mineral;


class MineralController extends Controller
{
    
    public function list()
    {
        $minerals = Mineral::all();
        return view('mineral', compact('minerals'));
    }

    public function create(Request $request)
    {
        if($request->isMethod('POST')){

            $mineral = new Mineral;
            $mineral->name = $request->input('name');
            $mineral->desc = $request->input('desc');
            $mineral->save();
          
            return redirect('mineral');
        }
        return view('mineral.create');
    }

    
    
}
