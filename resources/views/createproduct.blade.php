@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 style="text-align: center;">Create Product</h2>
                
                <div class="card">
                <div class="card-header">Product form </div>

                <div class="card-body">
                    <form action="{{url('addproduct')}}" method=post enctype="multipart/form-data">
                        @csrf 
                        <label for="">Name</label>

                        <input type="text" name="name" ><br><br>
                        <label>Description</label>

                        <textarea name="description" rows="5" >
                        </textarea><br><br>
                        <label>Price</label>

                        <input type="text" name="price"><br><br>
                        <label>Image</label>

                        <input type="file" name="image"><br><br>
                        <button type="submit">Add product</button>

                    </form>
                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                
                </div>
                </div>
                </div>
                </div>
                </div>
@endsection

