<?php get_header(); ?>

<main id="content">

	<div class="row">
		<img class="full-width" src="<?php the_field('banner_image'); ?>">
	</div>

	<div class="container-fluid">

		<div class="row">

			<div class="col-sm-1"></div>

			<div class="col-sm-10">

				<h1 class="page-heading reveal-up"><?php the_title(); ?></h1>

				<?php 
				if(have_rows('body_content')):
					while( have_rows('body_content') ): the_row(); ?>
						<div class="content-block reveal-up">
							<?php if( get_sub_field('heading') ){ ?>
								<h2 class="subheading blue"><?php the_sub_field('heading'); ?></h2>
							<?php }; ?>
							<?php if( get_sub_field('body') ){ ?>
								<?php the_sub_field('body'); ?>
							<?php }; ?>
						</div>
						<?php
					endwhile;
				endif;?>

			</div>

			<div class="col-sm-1"></div>

		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h2 class="subheading blue reveal-up success-heading">Success Stories</h2>
			</div>
			<div class="col-sm-1"></div>
		</div>

		<div class="row">

			<div class="col-sm-1"></div>

			<div class="col-sm-7 reveal-left">

				<?php 
				if(have_rows('success_stories')):
					while( have_rows('success_stories') ): the_row(); ?>
						<div class="content-block reveal-up">
							<?php if( get_sub_field('story') ){ ?>
								<p><?php the_sub_field('story'); ?></p>
							<?php }; ?>
						</div>
						<?php
					endwhile;
				endif;?>

			</div>

			<div class="col-sm-3 service-sidebar reveal-right">
				<a href="<?php echo get_home_url(); ?>/#schedule" class="schedule-button">Schedule Appointment</a>
				<h2 class="subheading blue">Free Consultation</h2>
				<p>Want more information?<br>
					Schedule a free, 15 minute phone or in-person appointment to discuss your needs with Dr. Brenda.<br>
					<a href="tel:5038877725">503-887-7725</a>
				</p>
				<div class="service-form">
					<?php echo do_shortcode('[contact-form-7 id="152" title="Services Form"]'); ?>
				</div>
			</div>

			<div class="col-sm-1"></div>

		</div>

	</div>

</main>



<?php get_footer(); ?>


