@extends('admin.admin-master')

@section('admin')
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif
                 <div class="mt-5"><h3>Employees List</h3></div>
                    <!-- Button trigger modal -->
                    <a href="{{url('employees/create/')}}" class="btn btn-primary pull-right mb-3">Add New Employee</a>
  
  
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th scope="col">Name</th>
                                <th scope="col">ID</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>                                
                                <th scope="col">Department</th>
                                <th scope="col">Address</th>
                                <th scope="col">DOA</th>
                            </tr>
                        </thead>
                            <tbody>
                              @foreach ($employees as $employee )                  
                                <tr>           
                                    <td>{{$employee->employee_name}}</td> 
                                    <td>{{$employee->id_no}}</td> 
                                    <td>{{$employee->id_photo}}</td> 
                                    <td>{{$employee->phone}}</td> 
                                    <td>{{$employee->email}}</td> 
                                    <td>{{$employee->department}}</td>  
                                    <td>{{$employee->address}}</td> 
                                    <td>{{$employee->appointment_date}}</td>                                                                          
                                    <td><a href="#"><span class="text-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a> 
                                           
                                        <a href="#"><span class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                                    </td>
                                 </tr>
                                @endforeach  
                            </tbody>
                    </table>
                    {{-- Pagination --}}
                
                </div>
            </div>
        </div>

        
            
@endsection