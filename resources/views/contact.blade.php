 @include('layouts.header')
 <div id="scrollAnchor"><!--anchor for scroll button--></div>

 <section class="mainContent">
   <!-- main content -->
   <div id="address" class="row small-collapse">
     <div class="column small-2 small-offset-2">
       <h2 class="infoHeading contactHeading"><?php echo $title;?></h2>
     </div>
     <div id="map" class="column small-8 small-centered">
       <!-- AIzaSyBD7ug0phs_PZpJvdVtz4LwLcuAZcAOftU
     google maps API key -->
     <iframe width="100%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJE6Ja8of6LogRU2_GEDJ1hFk&key=AIzaSyBD7ug0phs_PZpJvdVtz4LwLcuAZcAOftU" allowfullscreen></iframe>
     </div>
     <div id="addressInfo" class="column small-8 small-centered">
       <h1>Heff's Hives</h1>
       <p>34 Butternut Ln, London, ON N6K 4J4<br>519.860.7388</p>
     </div>
   </div>

   @if($errors->any())
       <h4>Errors:</h4>
       <ul>
           @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   @endif

   <div id="contactForm" class="row small-collapse">
       <form class="column small-8 small-centered" action= "{{ url('mail') }}" method="post">
         {{ csrf_field() }}
         <div class="row small-collapse">
           <div class="columns small-6 paddingFixRight">
             <input type="text" name="name" value="{{ old('name') }}" placeholder="name">
           </div>
           <div class="columns small-6 paddingFixLeft">
             <input type="email" name="email" value="{{ old('email') }}" placeholder="email">
           </div>
           <div class="column small-12">
             <input type="text" name="subject" value="{{ old('subject') }}" placeholder="subject">
           </div>
           <div class="column small-12">
             <textarea name="message" value="{{ old('msg') }}" rows=12 cols="80" placeholder="message"></textarea>
           </div>
           <div class="column small-3 small-centered">
             <input id="submit" type="submit">
           </div>
         </div>
       </form>
   </div>
 </section>
 @include('layouts.footer')
