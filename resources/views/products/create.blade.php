@extends('admin.admin-master')

@section('admin')

<div class="container">
    <div class="row mt-5">

        <div class="col-md-12">
            <div class="mt-5 mb-3"><h3>Enter New Product</h3></div>
            <form action="{{route('product.store')}}" method="POST">
                @csrf

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="product_name" placeholder="Enter Name">                  
                  @error('product_name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>                     
              
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="text" class="form-control" name="photo">                  
                    @error('photo')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>   
                
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name="category">                  
                    @error('category')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>     

                <div class="form-group">
                    <label for="buying_price">Buying P</label>
                    <input type="text" class="form-control" name="buying_price" placeholder="Enter Buying Price">                  
                    @error('buying_price')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 

                <div class="form-group">
                    <label for="selling_price">Selling P</label>
                    <input type="text" class="form-control" name="selling_price" placeholder="Enter Selling Price">                  
                    @error('selling_price')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> 
                
                <button type="submit" class="btn btn-primary">Submit</button>
              
            </form>
        </div>
        
    </div>
</div>



@endsection