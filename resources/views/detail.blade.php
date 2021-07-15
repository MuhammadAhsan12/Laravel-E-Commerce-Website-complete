@extends('master')
@section("content")

<div class="cntainer">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>price : {{$product['price']}}</h3>
            <h4>details : {{$product['discription']}}</h4>
            <h4>catagory : {{$product['category']}}</h4>

            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">add to cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">buy now</button>
        </div>
    </div>
</div>

@endsection