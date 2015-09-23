<?php
/*
Template Name: Member Page Template
*/
?>

<?php get_header(); ?>

			<div id="content" class="membership">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
								
								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

									
				

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>


							

						</div> <!-- end #main -->

							<div id="sidebar-member" class="sidebar twelvecol last clearfix" role="complementary">

									<?php if ( is_active_sidebar( 'sidebar-member' ) ) : ?>

									<?php dynamic_sidebar( 'sidebar-member' ); ?>

								<?php else : ?>

									<!-- This content shows up if there are no widgets defined in the backend. -->

								<div class="alert alert-help">
								<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
							</div>

							<?php endif; ?>

						</div>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>







