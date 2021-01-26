<div class="wordPressContainer">
        <header class="content-header">
            <div class="meta mb-3">
                <h1 class='pageTitle'><?php the_title(); ?></h1>
                <br/>
                <span class="date"><?php the_date(); ?></span>
                <?php
                //parameters are before tag, between tags, after tags
                    the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
                ?>

                <span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span>
            </div>
        </header>
                
    <?php
    the_content();
    ?>

    <?php
    comments_template();
    ?>

</div>