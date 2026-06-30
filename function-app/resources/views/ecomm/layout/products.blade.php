<section class="trending-product section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Trending Product</h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but
            the majority have suffered alteration in some form.
          </p>
        </div>
      </div>
    </div>
    <div class="row">

@foreach ($products as $key=>$value)

      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-product">
          <div class="product-image">
            <img src="{{asset('storage/images/products')}}/{{$value['image'][0]['img_name']}}" alt="#" />

@if (Auth::guard("web")->check())

        <div class="button">

            <button id_pro="{{$value['id']}}" class="btn add_cart"><i class="lni lni-cart"></i> Add to Cart</button>

        </div>

@else

        <div class="button">

            <a href="{{route('login.form')}}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>

        </div>

@endif


          </div>
          <div class="product-info">
            <span class="category">{{$value['cat']['name']}}</span>
            <h4 class="title">
              <a href="{{route('product.details',$value->id)}}">{{$value->name}}</a>
            </h4>
            <ul class="review">
              <li><i class="lni lni-star-filled"></i></li>
              <li><i class="lni lni-star-filled"></i></li>
              <li><i class="lni lni-star-filled"></i></li>
              <li><i class="lni lni-star-filled"></i></li>
              <li><i class="lni lni-star"></i></li>
              <li><span>4.0 Review(s)</span></li>
            </ul>
            <div class="price">
              <span>{{$value->price}}</span>
            </div>
          </div>
        </div>
      </div>

@endforeach

    </div>
    <div class="w-25 d-flex">
            {{$products->links()}}
    </div>
  </div>
</section>
