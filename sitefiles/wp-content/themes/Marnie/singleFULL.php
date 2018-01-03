
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'single-post-thumbnail' ); ?>
<div class="full-post" id="post<?php echo $count; ?>">
	<img src="<?php echo $image[0]; ?>">
	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
	<div class="post-base">
		<a class="close-post" onclick="hidePost()">
			<h1 class="green">X</h1>
			<p class="grey">CLOSE</p>

			<a href="" target="_blank" class="post-social">
				<img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.png">
			</a>

			<a href="" target="_blank" class="post-social">
				<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png">
			</a>

			<a href="" target="_blank" class="post-social">
				<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
			</a>
		</a>
	</div>
</div>