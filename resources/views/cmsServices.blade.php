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
    <li><a href="http://localhost/bees/public/cms/{{$list->service_id}}">{{$list->service_name}}</a></li>
    @endforeach
    <li><a href="addservice">Add New</a></li>
  </ul>
  <div id="contactForm">
    <form class="column small-12 large-8 large-centered" action="{{$option}}" method="post">
      {{ csrf_field() }}
      <input class="hide" type="text" name="serviceId" value="{{$serviceid}}">
      <label for="serviceName">Service Name</label>
      <input type="text" name="serviceName" value="{{$autoFill[0]->service_name}}">

      <label for="servicePrice">Service Price</label>
      <textarea name="servicePrice" rows="8" cols="80">{{$autoFill[0]->service_price}}</textarea>

      <label for="serviceVisits">Service Visits</label>
      <textarea name="serviceVisits" rows="8" cols="80">{{$autoFill[0]->service_visits}}</textarea>

      <label for="serviceDesc">Service Description</label>
      <textarea name="serviceDesc" rows="8" cols="80">{{$autoFill[0]->service_desc}}</textarea>

      <label for="serviceBenefit">Service Benefits</label>
      <textarea name="serviceBenefit" rows="8" cols="80">{{$autoFill[0]->service_benefit}}</textarea>

      <input id="submit" class="cmsSubmit" type="submit">
    </form>

    <form class="column small-12 large-8 large-centered" action="deleteservice" method="post">
      {{ csrf_field() }}
      <input class="hide" type="text" name="serviceId" value="{{$serviceid}}">
      <input id="submit" class="cmsSubmit delete" class="delete" type="submit" value="DELETE">
    </form>

  </div>
</section>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
