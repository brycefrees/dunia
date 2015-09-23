<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>


			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">


							<h1 class="archive-title h2"><span><?php _e("You are Viewing:", "bonestheme"); ?></span> <?php single_cat_title(); ?></h1>

							

							<?php if (is_tax('custom_cat', array( 'Fall 2013 Additions', 'Fall 2013 Additions: Rayon Lycra', 'Fall 2013 Additions: Rayon Jersey', 'Fall 2013 Additions: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Fall 2013 Additions' )); ?>


							<?php } elseif (is_tax('custom_cat', array( 'Fall 2013 Preview', 'Fall 2013 Preview: Rayon Lycra', 'Fall 2013 Preview: Rayon Jersey', 'Fall 2013 Preview: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Fall 2013 Preview' )); ?>
								
							
							<?php } elseif (is_tax('custom_cat', array( 'Spring 2014 Preview', 'Spring 2014 Preview: Lycra', 'Spring 2014 Preview: Rayon Jersey', 'Spring 2014 Preview: Fuji','Spring 2014 Preview: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Spring 2014 Preview' )); ?>
								
							
							<?php } elseif (is_tax('custom_cat', array( 'Summer 2014', 'Summer 2014: Rayon Lycra', 'Summer 2014: Rayon Jersey', 'Summer 2014: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Summer 2014' )); ?>
								
							
							<?php } elseif (is_tax('custom_cat', array( 'Fall Preview 2014', 'Fall Preview 2014: Rayon Lycra', 'Fall Preview 2014: Rayon Jersey', 'Fall Preview 2014: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Fall 2014' )); ?>
								
							<?php } elseif (is_tax('custom_cat', array( 'Fall 2014 Additions', 'Fall 2014 Additions: Rayon Lycra', 'Fall 2014 Additions: Jersey', 'Fall 2014 Additions: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Fall 2014 Additions' )); ?>
								

							<?php } elseif (is_tax('custom_cat', array( 'Spring 2015', 'Spring 2015: Rayon Lycra', 'Spring 2015: Rayon Jersey', 'Spring 2015: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Spring 2015' )); ?>

							<?php } elseif (is_tax('custom_cat', array( 'Summer 2015', 'Summer 2015: Rayon Lycra', 'Summer 2015: Rayon Jersey', 'Summer 2015: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Summer 2015' )); ?>

							<?php } elseif (is_tax('custom_cat', array( 'Fall 2015', 'Fall 2015: Rayon Lycra', 'Fall 2015: Rayon Jersey', 'Fall 2015: Cotton Gauze') ) ) { ?>
							<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Fall 2015' )); ?>

							<?php } elseif (is_tax('custom_cat', array( 'Spring 2016', 'Spring 2016: Rayon Lycra', 'Spring 2016: Rayon Jersey', 'Spring 2016: Cotton Gauze') ) ) { ?>
							
								<span class="filter">Filter for:</span>  <?php wp_nav_menu( array('menu' => 'Spring 2016:' )); ?>

							<?php } elseif (is_tax('custom_cat', 'catalogs_swatches') ) { ?>
							
								
							
								

							
								
							
							<?php } elseif (is_tax('custom_cat')) { ?>
								
								<span class="filter">Filter for:</span> <?php wp_nav_menu( array('menu' => 'All Collections' )); ?>
								

							<?php } else  { ?>
									
							<?php } ?>


			
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" class="threepointfivecol article" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">
									
								</header> <!-- end article header -->

								<section class="entry-content">

									<?php $query = new WP_Query( array( 'custom_cat' => 'recent collections' ) ); ?>

									<?php if ( has_post_thumbnail()) : ?>
   										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   										<?php the_post_thumbnail('medium'); ?>
   										</a>
 									<?php endif; ?>

 									<div class="item">

 										<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<?php the_meta(); ?>

									</div>

								</section> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

							<?php endwhile; ?>

									<?php if (function_exists('bones_page_navi')) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the taxonomy-custom_cat.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
