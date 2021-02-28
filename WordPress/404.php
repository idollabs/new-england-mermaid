<?php
get_header();
?>
<br/>
<h1 style='text-align: center; font-size: 40px'>
404 Page Not Found
</h1>
<br/>
<p style='text-align: center; font-size: 25px'>
Consider one of the following:
</p>
<br/>

 <!-- blog grid -->
 <div class="parent">
          
          
          <!-- Mobile Blog Items -->
          <div class="mobileContainer mobileFirst">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Wall-in-Fortweatheril.jpg"
              alt="Avatar"
              class="image mobileFirstImg"
            />
            <div class="mobileMiddle">
              <h3>Geeking out with Deb</h3>
              <br />
              <p>
                That’s an animal? It’s actually alive? The more we know about
                things, the more we appreciate and love them, and the more we
                find the beauty and fascination in them. Let’s learn about the
                creatures, some tiny, some larger, that live in our oceans and
                tidepools.
              </p>
              <a href='<?php echo get_option('siteurl'); ?>/category/geeking-out-with-deb/'>
              <button class="gridBtn"><i class="fa fa-plus"></i></button>
              </a>
            </div>
          </div>
          <div class="mobileContainer">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Skate-screen-shot.jpg"
              alt="Avatar"
              class="image"
            />
            <div class="mobileMiddle">
              <h3>From Behind the Fish: Caudal Tails</h3>
              <br />
              <p>
                There are lots of places where you can find award-winning
                underwater photos. This is not one of them. I’ve become quite
                skilled at taking pictures of the butt ends of fish as they swim
                away. We can all be underwater photographers of all levels, and
                there is always something fun to see.
              </p>
              <h2 style="font-style: italic"><br />Coming Soon</h2>
            </div>
          </div>
          <div class="mobileContainer mobileLast">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-Looking-out-at-the-Ocean-Acadia-National-Park.jpg"
              alt="Avatar"
              class="image mobileLastImg"
            />
            <div class="mobileMiddle">
              <h3>Ocean Musings</h3>
              <br />
              <p>
                I think a lot about the oceans. Sometimes I think my thoughts
                are profound and deep (deep like the ocean, get it? – ugh -
                sorry). Sometimes I’m the only one who thinks that. That’s ok.
              </p>
              <h2 style="font-style: italic"><br />Coming Soon</h2>
            </div>
          </div>

          <!-- blog items -->

          <div class="container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Wall-in-Fortweatheril.jpg"
              alt="Avatar"
              class="image"
            />
            <div class="defaultMiddle">
              <div class="defaultText">Geeking out with Deb</div>
            </div>
            <div class="middle">
              <div class="text">
                That’s an animal? It’s actually alive? The more we know about
                things, the more we appreciate and love them, and the more we
                find the beauty and fascination in them. Let’s learn about the
                creatures, some tiny, some larger, that live in our oceans and
                tidepools.
              </div>
              <a href='<?php echo get_option('siteurl'); ?>/category/geeking-out-with-deb/'>
              <button class="gridBtn"><i class="fa fa-plus"></i></button>
              </a>
            </div>
          </div>

          <div class="container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Fish-Tail-for-Blog.jpg"
              alt="Avatar"
              class="image"
            />
            <div class="defaultMiddle">
              <div class="defaultText">From Behind the Fish: Caudal Tails</div>
            </div>
            <div class="middle">
              <div class="text">
                There are lots of places where you can find award-winning
                underwater photos. This is not one of them. I’ve become quite
                skilled at taking pictures of the butt ends of fish as they swim
                away. We can all be underwater photographers of all levels, and
                there is always something fun to see.
              </div>
              <h2 style="font-style: italic; padding-top: 20px">Coming Soon</h2>
            </div>
          </div>

          <div class="container">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-Looking-out-at-the-Ocean-Acadia-National-Park.jpg"
              alt="Avatar"
              class="image"
            />
            <div class="defaultMiddle">
              <div class="defaultText">Ocean Musings</div>
            </div>
            <div class="middle">
              <div class="text">
                I think a lot about the oceans. Sometimes I think my thoughts
                are profound and deep (deep like the ocean, get it? – ugh -
                sorry). Sometimes I’m the only one who thinks that. That’s ok.
              </div>
              <a href='<?php echo get_option('siteurl'); ?>/category/ocean-musings/'>
              <button class="gridBtn"><i class="fa fa-plus"></i></button>
              </a>
            </div>
          </div>
        </div>

<?php
    get_footer();
?>  