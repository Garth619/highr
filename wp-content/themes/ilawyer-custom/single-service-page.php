<?php

/** 
* Template Name: Single Service
* 
*/

 get_header(); ?>
<div id="phone-header">
	<div class="row">
	<p><a href="tel:18007536997">1.800.753.6997</a></p>
	</div>
</div>
    <div class="container serv-title">
        <div class="row">
            <div class="twelvecol">
                <div class="title common">
                    <h1 class='text'><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
<div id="main" role="main" class="wrapper common">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container clearfix posts">
        <div class="row">
            <div class="twelvecol">
                <!--BEGIN .hentry -->
                <div class="entry-content responsive">
		    <!-- single-service-page.php -->
                    <?php the_content(); ?>
                </div><!-- END CONTENT-->
		<div class="the-sidebar responsive">
		    <?php dynamic_sidebar('cs-primary'); ?>
		</div><!-- .the-sidebar -->
            </div>
        </div>

    </div>
    <?php endwhile; ?>

    <?php else:
    // no content
endif; ?>
</div>
<?php get_footer(); ?>