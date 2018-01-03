<?php get_header(); ?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' ); ?>

<main id="content">

	<div class="container-fluid">

		<div class="col-sm-1 col-lg-2"></div>

		<div class="col-sm-7 col-lg-6">
			<a id="back-to-blog" href="<?php echo get_home_url(); ?>/#new-anchor">Return to all posts</a>
			<span id="postContent">
				<!-- blog post content -->
				<img src="<?php echo $image[0]; ?>">
				<h3 class="reveal-up"><?php the_title(); ?></h3>
				<?php the_content(); ?>
				<!-- end blog post content -->
				<div class="post-base">
					<a class="close-post" onclick="hidePost()">
						<h1 class="green">X</h1>
						<p class="grey">CLOSE</p>

						<a href="https://pinterest.com/pin/create/bookmarklet/?&url=<?php the_permalink(); ?>&description=<?php bloginfo(); ?>&media=<?php echo urlencode($image[0])?>" target="_blank" class="post-social">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.png">
						</a>

						<a href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="post-social">
							<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png">
						</a>

						<a href="https://twitter.com/share?url=<?php the_permalink();?>&text=<?php bloginfo(); ?>" target="_blank" class="post-social">
							<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
						</a>
					</a>
				</div>
			</span>
		</div>

		<div class="col-sm-3 col-lg-2" id="archive-links">
			<h3>ARCHIVE LINKS</h3>
			<ul id="link-list">
				<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 6 ) )?>
				<li>
					<a>...</a>
					<ul class="postLinks">
						<?php 
						$args = array(
							'date_query' => array(
								'column'  => 'post_date',
						        'before'   => '- 180 days'
							),
						);
						$links = new WP_Query( $args );

						while( $links->have_posts() ) : $links->the_post(); 
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php
						endwhile;
						?>
					</ul>
				</li>
			</ul>
		</div>

		<div class="col-sm-1 col-lg-2"></div>

	</div>

</main>

<script>
$('nav li a').each(function(){
	anchor = $(this).attr('href');
	$(this).attr('href', '<?php echo get_home_url(); ?>/' + anchor );
})
</script>

<?php get_footer(); ?>


