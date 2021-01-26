
<?php
get_header();
?>
      <!-- <div class="waves"></div> -->
      <main>
        <!-- short about -->
        <article class="shortAbout">
          <div class="imgContainer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-coming-out-of-water.jpg" alt="" />
            <!-- <img id="imgSquare" src="images/mermaidpic.jpg" alt="" /> -->
          </div>
          <div class="textContainer">
            <h1>Welcome!</h1>
            <p>
              <!-- Sometimes I think I was meant to live underwater! I’m much more
              graceful there... -->
              You can read my
              <a href="<?php echo get_option('siteurl'); ?>/about" style="color: rgb(76, 141, 176)"
                >ABOUT ME</a
              >
              or check out my blogs below!
            </p>
          </div>
        </article>

        <!-- blog grid -->
        <div class="parent">
          <!-- media query bio  -->
          <div class="container mobileBioA">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-coming-out-of-water.jpg"  
              alt="Avatar"
              class="mobileBioImg"
            />
          </div>
          <div class="childB mobileBioB">
            <article>
              <h1>Welcome!</h1>
              <p>
                You can read my

                <a href="./about.html" style="color: rgb(76, 141, 176)"
                  >ABOUT ME</a
                >

                or check out my blogs below!
              </p>
            </article>
          </div>
          <!-- Mobile Blog Items -->
          <div class="mobileContainer mobileFirst">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-Looking-out-at-the-Ocean-Acadia-National-Park.jpg"
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
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-Looking-out-at-the-Ocean-Acadia-National-Park.jpg"
              alt="Avatar"
              class="image"
            />
            <div class="mobileMiddle">
              <h3>From Behind the Fish: Caudal Tales</h3>
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
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-Looking-out-at-the-Ocean-Acadia-National-Park.jpg"
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
              src="<?php echo get_template_directory_uri(); ?>/assets/images/Deb-Looking-out-at-the-Ocean-Acadia-National-Park.jpg"
              alt="Avatar"
              class="image"
            />
            <div class="defaultMiddle">
              <div class="defaultText">From Behind the Fish: Caudal Tales</div>
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
              <h2 style="font-style: italic; padding-top: 20px">Coming Soon</h2>
            </div>
          </div>
        </div>
        
      </main>

<?php
    get_footer();
?>

     