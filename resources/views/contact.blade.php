 @include('layouts.header')
 <div id="scrollAnchor"><!--anchor for scroll button--></div>

 <section class="mainContent">
   <!-- main content -->
   <div id="address" class="row small-collapse">
     <div class="column small-11 small-offset-1 large-2 large-offset-2">
       <h2 class="infoHeading contactHeading"><?php echo $title;?></h2>
     </div>
     <div id="map" class="column small-12 large-8 large-centered">
       <!-- AIzaSyAWjgJWX1Fd21hpo0B0ojyipdP4-gm59tM
     google maps API key -->
     </div>
     <div id="addressInfo" class="column small-12 large-8 large-centered">
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
       <form class="column small-12 large-8 large-centered" action= "{{ url('mail') }}" method="post">
         {{ csrf_field() }}
         <div class="row large-collapse">
           <div class="columns small-12 large-6 paddingFixRight">
             <label for="name">Name</label>
             <input type="text" name="name" value="{{ old('name') }}" placeholder="type message here">
           </div>
           <div class="columns small-12 large-6 paddingFixLeft">
             <label for="email">Email</label>
             <input type="email" name="email" value="{{ old('email') }}" placeholder="type message here">
           </div>
           <div class="column small-12">
             <label for="subject">Subject</label>
             <input type="text" name="subject" value="{{ old('subject') }}" placeholder="type message here">
           </div>
           <div class="column small-12">
             <label for="message">Message</label>
             <textarea name="message" value="{{ old('msg') }}" rows=12 cols="80" placeholder="type message here"></textarea>
           </div>
           <div class="column small-12 small-centered">
             <input id="submit" type="submit">
           </div>
         </div>
       </form>
   </div>
 </section>
 @include('layouts.footer')
