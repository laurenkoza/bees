 @include('layouts.head')
 @include('layouts.header')
 <div id="scrollAnchor"><!--anchor for scroll button--></div>
    <div class="mainContent">
    <h2 class="hide"><?php echo $title;?></h2>
    <div id="shop" class="row">
      @foreach ($products as $product)
      <div class="column small-10 large-8 small-centered shopItem">
      	<h3 class="shopItemName">{{$product->product_name}}</h3>
      	<p class="itemDesc  sideBorder">
          {{$product->product_desc}}
        </p>
      	<p class="shopPrice">
          {{$product->product_price}}
        </p>
      </div>
      @endforeach
    </div>
    </div>
 @include('layouts.footer')
