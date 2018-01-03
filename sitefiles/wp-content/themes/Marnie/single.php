<?php get_header(); ?>

<main id="content">

	<div class="container">

		<!-- <div class="row">
			<h1 class="page-heading">BLOG</h1>
		</div> -->

		<div class="row">
			<div class="col-md-1"></div>

			<div class="col-md-7">
				<a id="post-thumb" onclick="window.history.back()">
					<img class="back" src="<?php echo get_stylesheet_directory_uri(); ?>/img/close-icon.png">
					<?php the_post_thumbnail(); ?>
				</a>

				<h3 class="reveal-up subheading blue"><?php the_title(); ?></h3>
				<p class="blog-date"><?php echo get_the_date('m.d.Y'); ?></p>

				<div class="justified"><?php the_content(); ?></div>
				
				<div class="social">
					<span class="green">Share </span>
					<a href="https://pinterest.com/pin/create/bookmarklet/?&url=<?php the_permalink(); ?>&description=<?php bloginfo(); ?>&media=<?php echo urlencode(the_field('image'))?>" target="_blank" class="post-social">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pinterest.png">
					</a>
					<a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="post-social">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png">
					</a>
					<a href="https://twitter.com/share?url=<?php the_permalink();?>" target="_blank" class="post-social">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png">
					</a>
				</div>
					
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

			<div class="col-md-1"></div>
		</div>
	</div>

</main>

<script>
// $('nav li a').each(function(){
// 	anchor = $(this).attr('href');
// 	$(this).attr('href', '<?php echo get_home_url(); ?>/' + anchor );
// })
</script>

<?php get_footer(); ?>


