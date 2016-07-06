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
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts('post_type=post&paged=' . $paged);     ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container clearfix posts">
            <div class="twelvecol">
                <!--BEGIN .hentry -->
                <article <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">
                    <?php $format = get_post_format();
                    if (false === $format)
                        $format = 'standard';

                    get_template_part('includes/' . $format); ?>

                    <div class="entry-title">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="text"><?php the_title(); ?></h3>
                        </a>
                    </div>
                    <?php  get_template_part('includes/post-meta');?>
                    <div class="entry-content">
			<!-- template-blog.php -->
                        <?php
                        global $more;
                        $more = 0;
                        the_excerpt(__('Read More', 'framework')); ?>
                    </div>
                </article>
            </div>

    </div>
    <?php endwhile; ?>

    <?php if (get_next_posts_link() || get_previous_posts_link()) : ?>
        <div class="container clearfix">

                <!--BEGIN navigation -->

                <div class="blog-navigation twelvecol clearfix">

                    <div class="next">
                        <?php if (get_next_posts_link()) {
                        $npl = explode('"', get_next_posts_link());
                        echo "<a class='blog-nav-item' href='" . $npl[1] . "'><span class='icon'></span> " . __('Older Entries', 'framework') . "</a>";
                    }
                        ?>
                    </div>
                    <div class="prev">
                        <?php if (get_previous_posts_link()) {
                        $ppl = explode('"', get_previous_posts_link());
                        echo "<a class='blog-nav-item' href='" . $ppl[1] . "'>" . __('Newer Entries', 'framework') . " <span class='icon'></span></a>";
                    }
                        ?>
                    </div>

                    <!--END navigation -->
                </div>
        </div>
        <?php endif; ?>

    <?php else:
    // no content
endif; ?>

    <?php wp_reset_query(); ?>
</div><!-- .blog-right -->
		<div class="the-sidebar responsive">
		    <?php dynamic_sidebar('cs-primary'); ?>
		</div><!-- .the-sidebar -->
</div><!-- .blog-wrap -->
</div>
<?php get_footer(); ?>