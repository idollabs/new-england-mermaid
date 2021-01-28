<!-- gets header -->
<?php
   get_header();
   ?> 
  
		<article class="wpContent px-3 py-5 p-md-5">
        
        
		<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
                    
                    get_template_part('template-parts/content', 'archive');
				}
			}
		?>

        <div class='page-links'>
        <?php
            the_posts_pagination();
        ?>
        </div>

	    </article>
	  
<!-- gets footer -->
<?php
    get_footer();
?>