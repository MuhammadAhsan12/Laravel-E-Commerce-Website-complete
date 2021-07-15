@extends('master')
@section("content")

<div class="cntainer custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
       
    <div class="item active">
      <img src="https://tech2globe.com/images/slider/e-commerce.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Shoes</h3>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img src="https://muthabrothers.com/admin_panel/public/images/slider_images/in-img-5.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Cards</h3>
        <p>Easy Shoping with cards avalable!</p>
      </div>
    </div>

    <div class="item">
        <img src="http://euro-sourcing.com/images/slider/shop.jpg" alt="New York">
            <div class="carousel-caption">
                <h3>Shopping</h3>
                <p>Happy shopping!</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="trending-wrapper">
    <h3 class="trending-h3">Trending product</h3>
        @foreach($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="trending-text">
                    <h3>{{$item['name']}}</h3>
                </div>
            </a>
            
        </div>
       @endforeach
</div>

</div>



@endsection