@extends('master')
@section("content")

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            @foreach($orders as $item)
            <div class="row Searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>

                <div class="col-sm-3">
                    <div class="">
                        <h5>Name : {{$item->name}}</h5>
                        <h5>Delevery Status : {{$item->status}}</h5>
                        <h5>address : {{$item->address}}</h5>
                        <h5>payment status : {{$item->payment_status}}</h5>
                        <h5>payment method : {{$item->payment_method}}</h5>
                    </div>
                </div> 

            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection