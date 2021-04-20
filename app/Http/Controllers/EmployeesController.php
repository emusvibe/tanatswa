<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\StatefulGuard;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }
    
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_name' => 'required|max:255',          
            'id_no' => 'required|max:255',
            'id_photo' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'department' => 'required|max:255',
            'address' => 'required|max:255',            
            'appointment_date' => 'required|max:255'                      
        ]);
        
        $employee = new Employee;
        $employee->employee_name = $request->input('employee_name');    
        $employee->id_no = $request->input('id_no');       
        $employee->id_photo = $request->input('id_photo');
        $employee->phone = $request->input('phone');
        $employee->email = $request->input('email');
        $employee->department = $request->input('department'); 
        $employee->address = $request->input('address');
        $employee->appointment_date = $request->input('appointment_date');          
        $employee->save();       
        
        return redirect()->route('employees')->with('success', 'Employee Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
