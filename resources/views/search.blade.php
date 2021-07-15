@extends('master')
@section("content")

<div class="cntainer custom-product">
<div class="trending-wrapper">
    <h3 class="trending-h3">Trending product</h3>
        @foreach($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="trending-text">
                    <h2>{{$item['name']}}</h2>
                    <h5>{{$item['discription']}}</h5>
                </div>
            </a>
        </div>
       @endforeach
</div>

</div>



@endsection