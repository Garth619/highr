<?php get_header(); ?>
<?php /* Get author data */
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
<div id="phone-header">
	<div class="row">
	<p><a href="tel:18007536997">1.800.753.6997</a></p>
	</div>
</div>
<div id="banner">
	<div class="row">
	<p class="poly blue">
                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works.
                    /* If this is a category archive */
                    if (is_category()) {
                        $title = __('Category ', 'framework') . single_cat_title('', false);
                        /* If this is a tag archive */
                    } elseif (is_tag()) {
                        $title = __('Tag ', 'framework') . single_tag_title('', false);
                        /* If this is a daily archive */
                    } elseif (is_day()) {
                        $title = __('Archive for ', 'framework') . get_the_time('F jS, Y');
                        /* If this is a monthly archive */
                    } elseif (is_month()) {
                        $title = __('Archive for ', 'framework') . get_the_time('F, Y');
                        /* If this is a yearly archive */
                    } elseif (is_year()) {
                        $title = __('Archive for ', 'framework') . get_the_time('Y');
                        /* If this is an author archive */
                    } elseif (is_author()) {
                        $title = __('Author ', 'framework') . $curauth->display_name;
                        /* If this is a paged archive */
                    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
                        $title = __('Archives ', 'framework');
                    } ?>
<?php echo coll_first_word($title); ?></p>
	</div>
</div>
<div id="main" role="main" class="wrapper common">
<div class="blog-wrap">
<div class="blog-left responsive">
    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="container clearfix posts">
            <div class="row">
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
                            <?php
                            global $more;
                            $more = 0;
                            the_excerpt(__('Read More', 'framework')); ?>
                        </div>
                    </article>
                </div>
            </div>

        </div>
        <?php endwhile; ?>

    <?php if (get_next_posts_link() || get_previous_posts_link()) : ?>
        <div class="container clearfix">
            <div class="row">

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