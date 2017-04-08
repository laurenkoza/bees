<!-- <!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700,900|Open+Sans:300,300i,400,700" rel="stylesheet">
  </head>

<body> -->
@include('layouts.head')
@include('layouts.cmsNav')
  <section class="mainContent">

  <h2 class="cmsHeading">CONTENT MANAGMENT</h2>



  <ul class="serviceSelection">
    @foreach ($lists as $list)
    <li><a href="http://localhost/bees/public/cmsshop/{{$list->product_id}}">{{$list->product_name}}</a></li>
    @endforeach
    <li><a href="addproduct">Add New</a></li>
  </ul>
  <div id="contactForm">
    <form class="column small-12 large-8 large-centered" action="{{$option}}" method="post">
      {{ csrf_field() }}
      <input class="hide" type="text" name="productId" value="{{$productid}}">
      <label for="productName">Product Name</label>
      <input type="text" name="productName" value="{{$autoFill[0]->product_name}}">

      <label for="productDesc">Product Description</label>
      <textarea name="productDesc" rows="8" cols="80">{{$autoFill[0]->product_desc}}</textarea>

      <label for="productPrice">Product Price</label>
      <textarea name="productPrice" rows="8" cols="80">{{$autoFill[0]->product_price}}</textarea>

      <input id="submit" class="cmsSubmit" type="submit" value="submit">
    </form>

    <form class="column small-12 large-8 large-centered" action="deleteproduct" method="post">
      {{ csrf_field() }}
      <input class="hide" type="text" name="productId" value="{{$productid}}">
      <input id="submit" class="cmsSubmit delete" type="submit" value="DELETE">
    </form>
  </div>
</section>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
