@extends('master')
@section('content')

<div class="custom-product">
	

<div class="col-sm-10">
  <div class="trending-wrapper">
  <h2 style="text-align: center; padding-top: 20px; padding-bottom: 20px;">Cart List</h2>
  <div class=" ">
    @foreach($products as $item)
    <div class="row searched-item cart-list-devider">
      <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{$item->gallery}}">
        </a>
      </div>
      <div class="col-sm-3">
        <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->description}}</h5>
      </div>
      </div>
      <div class="col-sm-3">
        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
      </div>
      </div>
      @endforeach
    </div>
    
</div>
</div>
</div>
@endsection