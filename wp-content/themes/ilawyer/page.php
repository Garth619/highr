<?php get_header(); ?>
<div id="main" role="main" class="wrapper common">
    <div class="container">
        <div class="row">
            <div class="twelvecol">
                <div class="title common">
                    <?php
                    $title = get_the_title();
                    ?>
                    <h1 class='text' id="stamp"><?php echo coll_first_word($title); ?></h1>
                    <?php if(is_page(2296)) { ?>
                        <p class="survey-text">required fields</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container clearfix posts">
        <div class="row">
            <div class="twelvecol">
                <!--BEGIN .hentry -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- END CONTENT-->
            </div>
        </div>

    </div>
    <?php endwhile; ?>

    <?php else:
    // no content
endif; ?>
</div>
<?php get_footer(); ?>