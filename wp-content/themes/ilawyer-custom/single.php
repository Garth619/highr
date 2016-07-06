<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<div id="phone-header">
	<div class="row">
	<p><a href="tel:18007536997">1.800.753.6997</a></p>
	</div>
</div>
<div id="banner">
	<div class="row">
	<p class="poly blue">our <span class="trade-bold white">BLOG</span></p>
	</div>
</div>
<div id="main" role="main" class="wrapper common">
<div class="blog-wrap">
<div class="blog-left responsive">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container clearfix posts">
        <div class="row">
            <div class="twelvecol">
                <!--BEGIN .hentry -->
                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


<div class="entry-title">

                        <h1 class="text"><?php the_title(); ?></h1>

                    </div>


                    <?php $format = get_post_format();
                    if (false === $format)
                        $format = 'standard';

                    get_template_part('includes/' . $format); ?>

                    
                    <div id="postmeta"><?php  get_template_part('includes/post-meta');?></div>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
								<div class="entry-author-block fix">
									<div class="entry-author-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'80'); ?></div>
									<p class="entry-author-name">&mdash; <?php the_author_meta('display_name'); ?></p>
									<p class="entry-author-description"><?php the_author_meta('description'); ?></p>
								</div>
                <div class="comments">
                    <?php comments_template('', true); ?>
                </div>
            </div>

        </div>

    </div>
    <?php endwhile; ?>

    <?php else:
    // no content
endif; ?>
</div><!-- .blog-right -->
		<div class="the-sidebar responsive">
		    <?php dynamic_sidebar('cs-single-blog-post'); ?>
		</div><!-- .the-sidebar -->
</div><!-- .blog-wrap -->
</div>
<?php get_footer(); ?>