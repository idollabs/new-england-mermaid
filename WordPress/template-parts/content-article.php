<div class="wordPressContainer">
        <div class="content-header">
            <div class="meta mb-3">
            
                <h1 class='pageTitle'><?php the_title(); ?></h1>

                <div class='linkBox'>
                <div>
                <?php next_post_link( '%link', 'Next Post', TRUE ); ?>
                </div>
                
                <div >
                <?php previous_post_link('%link', 'Previous Post', TRUE); ?>
                </div>
                </div>
                

                <div class='metaItems' style='font-size: 12px; text-align: right;'>
                <br/>  
                <hr/>

                <?php
                 the_category(',');
                ?>
                <span class="date"><?php the_date(); ?></span>

              

                <?php
                //parameters are before tag, between tags, after tags
                    the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
                ?>

               
                <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span>
                </div>
            </div>
</div>

        <br/>
       
    <article class='blogContent'>
    <?php
    the_content();
    ?>
    </article>

    <br/>
    <hr/>
    <br/>
  
    <br/>


    <?php
    comments_template();
    ?>

    <br/>
    <div class='linkBox'>
        <div>
            <?php next_post_link( '%link', 'Next Post', TRUE ); ?>
        </div>
        
        <div >
            <?php previous_post_link('%link', 'Previous Post', TRUE); ?>
        </div>
    </div>
    <br/>

</div>