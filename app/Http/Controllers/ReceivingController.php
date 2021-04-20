<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receiving;
use Illuminate\Contracts\Auth\StatefulGuard;

class ReceivingController extends Controller
{
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }
   
    public function index()
    {
        $receivings = Receiving::all();
        return view('receiving.receiving-log', compact('receivings'));
    }

    public function create(){
        return view('receiving.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'drive_name' => 'required|max:255',
            'vehicle_reg' => 'required|max:255',
            'cargo_description' => 'required|max:255',
            'cargo_weight' => 'required|max:255',
            'date_in' => 'required|max:255',                        
            'security_name' => 'required|max:255',           
        ]);
        
        $receivings = new Receiving;
        $receivings->drive_name = $request->input('drive_name');
        $receivings->vehicle_reg = $request->input('vehicle_reg');
        $receivings->cargo_description = $request->input('cargo_description');
        $receivings->cargo_weight = $request->input('cargo_weight');
        $receivings->date_in = $request->input('date_in');               
        $receivings->security_name = $request->input('security_name');  
        $receivings->save();       
        
        return redirect()->route('receiving.log')->with('success', 'Record Inserted Successfully');
    }

}
