@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-6 mt-5">
      <img src="/uploads/products/{{$product->image}}" style="width: 300px;;" alt="">
    </div>
    <div class="col-lg-6 mt-5">
      <div class="agent1">
        <h3><strong> {{$product->name}}</strong></h3>
        <p class="mt-3">{{$product->description}}</p>
        <ul class="list-unstyled">
          <li class="d-flex justify-content-between mb-3">
            <strong>Price:</strong>
            <span class="color-text-a">{{$product->price}}</span>
          </li>
@endsection