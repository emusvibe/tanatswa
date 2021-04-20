@extends('admin.admin-master')

@section('admin')

<div class="container">
    <div class="row mt-5">

        <div class="col-md-12">
            <div class="mt-5 mb-3"><h3>Enter New Record</h3></div>
            <form action="{{url('/receiving/store')}}" method="POST">
                @csrf

                <div class="form-group">
                  <label for="drive_name">Driver</label>
                  <input type="text" class="form-control" name="drive_name" placeholder="Enter Driver Name">                  
                  @error('drive_name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>         
                    
              
                <div class="form-group">
                    <label for="vehicle_reg">Vehicle Reg</label>
                    <input type="text" class="form-control" name="vehicle_reg" placeholder="Enter Vehicle Reg No">                  
                    @error('vehicle_reg')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 

                <div class="form-group">
                    <label for="cargo_description">Cargo Description</label>
                    <input type="text" class="form-control" name="cargo_description" placeholder="Enter Cargo Description">                  
                    @error('cargo_description')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 

                <div class="form-group">
                    <label for="cargo_weight">Cargo Weight</label>
                    <input type="text" class="form-control" name="cargo_weight" placeholder="Enter Cargo Weight">                  
                    @error('cargo_weight')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 

                <div class="form-group">
                    <label for="date_in">Date</label>
                    <input type="text" class="form-control" name="date_in" placeholder="Enter Date">                  
                    @error('date_in')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>                 

                <div class="form-group">
                    <label for="security_name">Security Name</label>
                    <input type="text" class="form-control" name="security_name" placeholder="Enter Security Name">                  
                    @error('security_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 

                <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
        </div>
        
    </div>
</div>



@endsection