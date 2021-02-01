<?php
   get_header();
?> 


  
 <main>
        <article class="content">

        <section >

        <h1 class='pageTitle'><?php the_title(); ?></h1>
        <br/>


          <div class="contentImages">
            <img class="aboutImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/mermaidpic.jpg" />
            <article class="imageTextBox">A rare sighting of the New England Mermaid out of the water in the Caribbean</article>
            <br />
            <div id='mobileSecondImg'>
            <img class="aboutImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/debdiving.jpg" />
            <article class="imageTextBox">The New England Mermaid visiting with a friend</article>
          </div>
          <br/>
            <img class="aboutImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-door.jpg" />
            <article class="imageTextBox">The New England Mermaid’s home out of the water</article>
          </div>
          <div class="contentImagesRight">
            <img class="aboutImgRight" src="<?php echo get_template_directory_uri(); ?>/assets/images/debdiving.jpg" />
            <article class="imageTextBoxRight">The New England Mermaid visiting with a friend</article>
          </div>


          <div class=aboutMargins>
          <?php
          the_content();
          ?>
          </div>
          

         

        </section>

        </article>
      </main>
    </article>		
	  
<?php
    get_footer();
?>