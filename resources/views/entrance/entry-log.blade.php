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
                 <div class="mt-5"><h3>Entry Records List</h3></div>
                    <!-- Button trigger modal -->
                    <a href="{{url('entrance/create/')}}" class="btn btn-primary pull-right mb-3">Add New Entry</a>
  
  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Entry ID</th>
                                <th scope="col">Driver Name</th>
                                <th scope="col">Vehicle Reg</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>                                
                                <th scope="col">Security</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                              @foreach ($entries as $entry )                  
                                <tr>           
                                    <td>{{$entry->id}}</td> 
                                    <td>{{$entry->drive_name}}</td> 
                                    <td>{{$entry->vehicle_reg}}</td> 
                                    <td>{{$entry->cargo_description}}</td> 
                                    <td>{{$entry->cargo_weight}}</td> 
                                    <td>{{$entry->date_in}}</td> 
                                    <td>{{$entry->time_in}}</td>                                      
                                    <td>{{$entry->security_name}}</td>                                        
                                    <td><a href="{{url('category/edit/'.$entry->id)}}"><span class="text-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a> 
                                           
                                        <a href="{{url('/softDelete/category/'.$entry->id)}}"><span class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
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