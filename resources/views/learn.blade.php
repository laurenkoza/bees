 @include('layouts.header')

	<div class="mainContent">
    <h2 class="hide"><?php echo $title;?></h2>
<div id="scrollAnchor"><!--anchor for scroll button--></div>
    <div class="row">
      <div id="infographic" class="column small-10 large-8 small-centered">
        <img src="img/learn/infographic_holder.svg" alt="Bee infographic">
        <div class="dots column small-10 large-8 small-centered"><!--filler for now just to how-->
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="fact" class="column large-8 small-10 small-centered">
        <h2 class="infoHeading">What Are Honey Bees?</h2>
        <p class="sideBorder">Honeybees (Apis mellifera) are social insects that vary in colour, usually from a yellow-brown to a dark brown, depending on the type. They are about 12.5 mm long with a hairy body. Honeybees feed on flower nectar and also collect pollen to feed their larvae.</p>
      </div>
    </div>

    <div id="callToAction" class="row expanded">
      <div class="column large-8 small-10 small-centered">
        <p class="infoHeading">Check out our <a href="services">services</a> or <a href="contact">contact us</a> page<br> if you are interested in helping out!</p>
      </div>
    </div>

    <div class="row">
      <div id="fact" class="column large-8 small-10 small-centered">
        <h2 class="infoHeading">Fun Fact</h2>
        <ul class="sideBorder">
          <li>Bees are classified as insects and they have six legs.</li>
          <li>Bees have five eyes - two compound eyes and three tiny ocelli eyes.</li>
          <li>Bees go through four stages of development: Egg, Larvae, Pupae and Adult Bee.</li>
          <li>There are three types of bee in a honey bee hive…The Queen (1), the Worker (Female) and Drone (Male).</li>
          <li>Females do all the work in the hive, and make up 95% of total population.</li>
          <span id="hiddenText" class="hideText">
          <li>Drones cannot sting.  Workers (Females) perish after a sting.</li>
          <li>Bees are the only insect in the world that make food that humans can eat.</li>
          <li>That a 1 pound jar of honey requires 1200 bees to fly almost 200,000km to visit 4.5million flowers!</li>
          <li>A single beehive can make more than 100 pounds (45 kg) of extra honey. The beekeeper only harvests the extra honey made by the bees</li>
          <li>Honey has natural preservatives and bacteria can't grow in it.</li>
          <li>Honey was found in the tombs in Egypt and it was still edible! Bees have been here around 30 million years.</li>
          <li>A honeybee can fly 24 km in an hour. Its wings beat 200 times per second or 12,000 beats per minute.</li>
          <li>Honey comes in different colours and flavours and its the flower where the nectar was gathered from that determines the flavour and colour of the honey.</li>
          </span>
          <button id="readMore" name="readMore">Read More</button>
        </ul>
      </div>
    </div>


		<div class="row">
      <div id="blog" class="column large-8 small-10 small-centered">
  			<h2 class="infoHeading">Blog</h2>
  			<p class="sideBorder">Honeybees have been present on the Earth for millions of years. One of the oldest agricultural pursuits known to man is beekeeping. Early settlers to North America had a limited and expensive source of sugar, so honeybees were exported from Europe to establish apiaries here.<br>
  			The honey and beeswax gathered were used for many purposes. Today, many advances have been made in this aspect of agriculture. Some people derive their income from their apiaries while many others keep honeybees as a hobby. Only female honey bees can sting, the males (drones) are not able to, whereas, Queen honey bees can sting, but they remain close to the hive, and so a sting form a honey bee queen would be very rare.  If the queen honey bee is removed from the hive, within 15 minutes, the rest of the colony knows about it!  A typical honey bee colony may have around 50,000 workers.</p>
      </div>
		</div>


	</div>
 @include('layouts.footer')
