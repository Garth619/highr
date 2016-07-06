<?php

/** 
* Template Name: Contact Page
* 
*/

 get_header(); ?>
<div id="phone-header">
	<div class="row">
	<p><a href="tel:18007536997">1.800.753.6997</a></p>
	</div>
</div>
<div id="banner">
	<div class="row">
	<p class="poly blue">contact <span class="trade-bold white">iLAWYERMARKETING</span></p>
	</div>
</div>
<div id="main" role="main" class="wrapper common">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container clearfix posts">
        <div class="row">
            <div class="twelvecol">
                <!--BEGIN .hentry -->
                <div class="entry-content">
			<div id="contact-left-col" class="zresponsive">
				<span class="trade-bold">DO YOU HAVE QUESTIONS FOR US?</span>
				<span class="poly blue">Call toll free</span> <span class="trade">1-800-753-6997</span>
				<a href="/#contact-us-quote" class="blue-button">request a quote online</a>
				<?php the_content(); ?>
			</div><!-- #contact-left-col -->
			<div id="contact-right-col" class="zresponsive">
				<a target="_blank" href="https://maps.google.com/maps?q=9810+SCRIPPS+LAKE+DR.+STE+A+SAN+DIEGO,+CA+92131&hl=en&sll=37.269174,-119.306607&sspn=14.304136,21.643066&hnear=9810+Scripps+Lake+Dr,+San+Diego,+California+92131&t=m&z=17" class="marker"></a>
			</div><!-- #contact-right-col -->
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