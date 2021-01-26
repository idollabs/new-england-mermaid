<!-- gets header -->
<?php
   get_header();
   ?> 
  
		<article class="wpContent px-3 py-5 p-md-5">
		
		<h1 class='categoryTitle'><?php the_category(','); ?></h1>
        <br/>

		<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
                    
                    get_template_part('template-parts/content', 'archive');
				}
			}
		?>

	    </article>
	  
<!-- gets footer -->
<?php
    get_footer();
?>