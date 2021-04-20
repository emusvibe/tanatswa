<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\StatefulGuard;

class EntranceController extends Controller
{
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }
   
    public function index()
    {
        $entries = Entry::all();
        return view('entrance.entry-log', compact('entries'));
    }

    public function create(){
        return view('entrance.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'drive_name' => 'required|max:255',
            'vehicle_reg' => 'required|max:255',
            'cargo_description' => 'required|max:255',
            'cargo_weight' => 'required|max:255',
            'date_in' => 'required|max:255',
            'time_in' => 'required|max:255',            
            'security_name' => 'required|max:255',           
        ]);
        
        $entry = new Entry;
        $entry->drive_name = $request->input('drive_name');
        $entry->vehicle_reg = $request->input('vehicle_reg');
        $entry->cargo_description = $request->input('cargo_description');
        $entry->cargo_weight = $request->input('cargo_weight');
        $entry->date_in = $request->input('date_in');
        $entry->time_in = $request->input('time_in');        
        $entry->security_name = $request->input('security_name');  
        $entry->save();       
        
        return redirect()->route('entry.log')->with('success', 'Entry Inserted Successfully');
    }
}
