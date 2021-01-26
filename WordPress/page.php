<!-- gets header -->
<?php
   get_header();
   ?> 
  
		<article class="content px-3 py-5 p-md-5">
        
        <h1 class='pageTitle'><?php the_title(); ?></h1>
        <br/>
        
		<?php
			if(have_posts()){
				while(have_posts()){
                    the_post();
                    the_content();
				}
			}
		?>

	    </article>
	  
<!-- gets footer -->
    <?php
    get_footer();
    ?>