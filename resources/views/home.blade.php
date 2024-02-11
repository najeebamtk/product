@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 style="text-align: center;">Product List</h2>
                
                <div class="card">
                <div class="card-header">List of products </div>

                <div class="card-body">
                    <table class="table table-bordered">
                       
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Descripion</th>
                            <th>Price</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)

                        <tr>
                            <td>{{$product->name}}</td>
                            <td><img src="uploads/products/{{$product->image}}" style="width:100px" class="card-img-top" alt="..."></td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td><a href="{{url('productsingle')}}/{{$product->id}}">View</a></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    
                </div>
            
            
            </div>
        </div>
<a href="{{url('createproduct')}}"> Create Product</a>  

    </div>
</div>
@endsection
