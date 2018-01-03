<?php /* Template Name: FULL ARCHIVE Template */ get_header(); ?>

<main id="content">

	<div class="container-fluid">

		<?php 
		// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$all = new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => '-1',
				'orderby' => 'date',
				'order' => 'DESC'
				));

		if ( $all->have_posts()): ?>

			<div class="col-md-1"></div>

			<div class="col-md-7">

				<?php 
					while( $all->have_posts() ) : $all->the_post(); 
				?>


					<div class="blog-preview">
						<a class="preview-photo" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_field('image'); ?>');"></a>
						<a class="date" href="<?php the_permalink(); ?>"><p><?php echo get_the_date(); ?></p></a>
						<a href="<?php the_permalink(); ?>"><h2 class="blue"><?php the_title(); ?></h2></a>
						<p><?php the_field('preview_text'); ?><a href="<?php the_permalink(); ?>"> READ MORE...</a></p>
					</div>

				<?php endwhile; ?>

			</div>

			<div class="col-md-3 reveal-left" id="archive-links">
				<h3>Recent Posts</h3>
				<ul class="link-list">
				<?php $recent = new WP_Query( array(
								'post_type' => 'post',
								'orderby' => 'date',
								'numberposts' => 4,
								'order' => 'DESC', ) );
					while ($recent->have_posts() ) : $recent->the_post();?>
						<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<?php endwhile; ?>
				</ul>
				<h3>ARCHIVE</h3>
				<ul class="link-list">
					<?php wp_get_archives( array( 'type' => 'monthly', 'order' => 'DESC', 'limit' => 6 ) )?>
					<li><a href="<?php the_permalink(166); ?>">All Posts</a></li>
				</ul>

				<a href="<?php echo get_home_url(); ?>/#schedule" class="schedule-button">Schedule Appointment</a>
			</div>

			<div class="col-md-1"></div>


		<?php endif; ?>


		<?php get_template_part('pagination'); ?>

	</div>

</main>



<?php get_footer(); ?>
