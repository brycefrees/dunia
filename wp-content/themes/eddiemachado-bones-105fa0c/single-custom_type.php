<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1> 



								</header> <!-- end article header -->

								<section class="entry-content clearfix">

									<?php the_content(); ?>

									<?php the_meta(); ?>

									<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __('Browse Related:', 'bonestheme') . '</span> ', ', ' ) ?></p>


								</section> <!-- end article section -->

								<footer class="article-header">
											  
									<span class="single-nav">
											<span class="prev"><?php previous_post('%', '&laquo;  Last Clothing Item', 'no'); ?>  </span>
											<span class="next"><?php next_post('% ', 'Next Clothing Item &raquo;', 'no'); ?></span>
									</span>		
									
								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
												

										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

					

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>