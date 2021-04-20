@extends('admin.admin-master')

@section('admin')

<div class="container">
    <div class="row mt-5">

        <div class="col-md-12">
            <div class="mt-5 mb-3"><h3>Enter New Employee</h3></div>
            <form action="{{route('employee.store')}}" method="POST">
                @csrf

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="employee_name" placeholder="Enter Name">                  
                  @error('employee_name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>                     
              
                <div class="form-group">
                    <label for="id_no">ID</label>
                    <input type="text" class="form-control" name="id_no" placeholder="Enter ID Number">                  
                    @error('id_no')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>  
                
                <div class="form-group">
                    <label for="id_photo">Photo</label>
                    <input type="text" class="form-control" name="id_photo">                  
                    @error('id_photo')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>   
                
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone">                  
                    @error('phone')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>     

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">                  
                    @error('email')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter address">                  
                    @error('address')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>      

                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" name="department" placeholder="Enter Department">                  
                    @error('department')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>                           

                <div class="form-group">
                    <label for="appointment_date">Appointment Date</label>
                    <input type="text" class="form-control" name="appointment_date" placeholder="Enter Appointment Date">                  
                    @error('appointment_date')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>                
                
                <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
        </div>
        
    </div>
</div>



@endsection