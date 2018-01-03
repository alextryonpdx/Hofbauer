<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

<div class="full-width row section" id="blog">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 class="page-heading reveal-up">BLOG</h1>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-5 blog-previews reveal-up">

				<?php 
				if( have_posts() ):	while( have_posts() ) : the_post(); ?>

						<div class="blog-preview">
							<a class="preview-photo" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></a>
							<a href="<?php the_permalink(); ?>"><h3 class="orange"><?php the_title(); ?></h3></a>
							<a class="date grey" href="<?php the_permalink(); ?>"><p><?php echo get_the_date(); ?></p></a>
						</div>
						<?php
					endwhile;
				endif; ?>
			</div>

			<div class="col-md-3 reveal-left" id="archive-links">
				<h2>RECENT POSTS</h2>
				<div class="link-list">
				<?php $recent = new WP_Query( array(
								'post_type' => 'post',
								'orderby' => 'date',
								'numberposts' => 4,
								'order' => 'DESC',
								'posts_per_page' => 6) );

					while ($recent->have_posts() ) : $recent->the_post(); ?>

						<p><a href="<?php the_permalink() ?>"><span class="orange"><?php the_title() ?></span><br><span class="grey"><?php echo get_the_date(); ?></span></a></p>
						<?php 
						
					endwhile; ?>
				</div>

				<p>&nbsp;</p>
				
				<h2>ARCHIVE</h2>
				<div class="link-list">
					<?php wp_get_archives( array( 'type' => 'monthly', 'order' => 'DESC', 'limit' => 6, 'format' => 'custom', 'after' => '<br/>' ) )?>
					<a class="orange" href="<?php the_permalink(4550); ?>">All Posts</a>
				</div>

			</div>
	</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
