<?php

/** 
* Template Name: Services Page
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
	<p class="poly blue">about <span class="trade-bold white">OUR SERVICES</span></p>
	</div>
</div>
<div id="main" role="main" class="wrapper common">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container clearfix posts">
        <div class="row">
            <div class="twelvecol">
                <!--BEGIN .hentry -->
                <div class="entry-content">
                    <?php the_content(); ?>
<hr class="full">
<div class="zcolumn left">
<div class="serv-box" id="web-design">
<h3 class="poly"><a href="/lawyer-web-design/"><span class="icon"></span>Website Design</a></h3>
<p>Each website we build is geared to maximize the conversion rate of your website visitors, which ultimately  means more clients for your law firm. iLawyer Marketing conducts extensive research in order to better understand the behavior of website visitors. This knowledge helps us develop websites that ultimately mean more leads generated for your law practice.</p>
<a href="/lawyer-web-design/" class="read-more">Read More</a>
</div>

<div class="serv-box" id="seo">
<h3 class="poly"><a href="/search-engine-optimization/"><span class="icon"></span>Search Engine Optimization</a></h3>
<p>If you want to successfully market your law firm online, you need 1st page visibility on Google for a wide variety of search terms. Consumers find what they are looking for on the first page of search results so unless you are in the top 10 results, potential clients will be missing out on finding your law firm. There is nobody better in the legal marketing industry at helping your law firm achieve 1st page Google rankings.</p>
<a href="/search-engine-optimization/" class="read-more">Read More</a>
</div>

<div class="serv-box" id="legal-content">
<h3 class="poly"><a href="/legal-content-writing/"><span class="icon"></span>Legal Content Writing</a></h3>
<p>We offer legal content writing services for each website we develop for you. Our content writers are trained to appeal to both your human visitors and website spiders as well, which can help improve your website conversion rate and rankings at the same time.</p>
<a href="/legal-content-writing/" class="read-more">Read More</a>
</div>
</div>

<div class="zcolumn right">
<div class="serv-box" id="video-production">
<h3 class="poly"><a href="/video-marketing/"><span class="icon"></span>Video Production</a></h3>
<p>iLawyer Marketing offers high quality video marketing solutions for your law firm. One of the most compelling ways to convince a website visitor to contact your firm is with high quality, professionally produced video.</p>
<a href="/video-marketing/" class="read-more">Read More</a>
</div>

<div class="serv-box" id="ppc">
<h3 class="poly"><a href="/pay-per-click-management-ppc-for-lawyers/"><span class="icon"></span>Pay Per Click</a></h3>
<p>PPC (Pay Per Click) management services for law firms looking for instant 1st page visibility on Google, Yahoo or Bing. Our Google Adwords certified PPC management team will setup your campaign, optimize your listings for high placement and customize your ad text to help maximize the number of clicks to your website.</p>
<a href="/pay-per-click-management-ppc-for-lawyers/" class="read-more">Read More</a>
</div>

<div class="serv-box" id="law-blogs">
<h3 class="poly"><a href="/law-firm-blogs/"><span class="icon"></span>Law Firm Blogs</a></h3>
<p>Our custom built blogs are designed to look more like a standard website than a traditional blog for improved website conversion rates. In addition, our blogs are incredibly easy to use. Simply write your thoughts, link to resources, and publish to your blog, all at the push of a few buttons.</p>
<a href="/law-firm-blogs/" class="read-more">Read More</a>
</div>
</div>
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