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
                 <div class="mt-5"><h3>Products List</h3></div>
                    <!-- Button trigger modal -->
                    <a href="{{url('products/create/')}}" class="btn btn-primary pull-right mb-3">Add New Product</a>
  
  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Category</th>
                                <th scope="col">Buying</th>
                                <th scope="col">Selling</th>                                
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                              @foreach ($products as $product )                  
                                <tr>           
                                    <td>{{$product->id}}</td> 
                                    <td>{{$product->product_name}}</td> 
                                    <td>{{$product->photo}}</td> 
                                    <td>{{$product->category}}</td> 
                                    <td>{{$product->buying_price}}</td> 
                                    <td>{{$product->selling_price}}</td>                                                                           
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