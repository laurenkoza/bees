 @include('layouts.head')
 @include('layouts.header')
 <div id="scrollAnchor"><!--anchor for scroll button--></div>
<section class="mainContent">
  <h2 class="hide"><?php echo $title;?></h2>
  <div class="row">
    <section id="ourServices" class="column large-8 small-10 small-centered infoBlock">
      <h2 class="infoHeading">Our Services</h2>
      <div class="sideBorder">
      <p>During my first couple of years around the bees I found the hard way to do most things despite research and my best efforts.  Bees sting, equipment costs money and honey is sticky..... I quickly realized many people were facing the same issues and very well a barriers to entry to help or to get more involved.The services we provide allow individuals at any level of interest or participation to take a moderate, or “at their pace” approach to beekeeping. For the beginner &amp; Intermediate alike we offer:</p>
        <ul>
          <li>Bee courses and tutorials in a class room setting, our apiaries or your yard.</li>
          <li>Hive rentals or purchases w support programs (“Rookie-Bee”, “The Worker Bee”)</li>
          <li>Pest management support &amp; consulting</li>
          <li>Honey harvest (Custom bottling &amp; honey extraction).</li>
          <li>Hive maintenance support.  Need to move a yard, going away and need someone to look in on your hives?</li>
          <li>Swarm removals</li>
          <li>Bee rescue</li>
          <li>Skunk and pest removal</li>
        </ul>
      </div>
    </section>
  </div>
<div id="services" class="row">

  @foreach ($services as $service)
    <section class="service columns large-6 small-10 small-centered large-uncentered">
      <div class="iconBlock column small-12 large-10 large-centered">
        @if($service->services_photo)
        <img src="img/icons/{{$service->services_photo}}" alt="Beekeeper Icon">
        @endif
        <h2 class="iconBlockHeading">{{$service->service_name}}</h2>
        <h4 class="price">{{$service->service_price}} {{$service->service_visits}}
        </h4>
        <p class="included sideBorder">
          {{$service->service_desc}}
        <span class="takeaway"><br>{{$service->service_benefit}}</span>
      </p>
      </div>
    </section>
  @endforeach

</div>
<div id="boutique" class="row expanded">
  <div id="boutiqueBG" class="transparentBG">
  <section class="column small-10 large-8 small-centered infoBlock">
    <h2 class="infoHeading">TECH TRANSFER &amp; BOUTIQUE MEMBERSHIP</h2>
    <div class="sideBorder">
      <ul>
        <li>5% in store discount.</li>
        <li>Seasonal specials for Boutique members only.</li>
        <li>Bee-Tech assistance 24/7 via telephone or email.</li>
        <li>“Between the Hives” bi monthly Newsletter.</li>
      </ul>
    </div>
  </section>
</div>
</div>


</section>
 @include('layouts.footer')
