<?php /* Template Name: McCool Template */ get_header(); ?>

<main id="content">

	<div id="banner" class="full-width" style="background-image:url('<?php the_field('banner', 5 ); ?>')">
		<div id="banner-copy">
			<!-- <div class="row" id="banner-foreground">
				<div class="col-sm-2"></div>

				<div class="col-sm-8 reveal-up">
					<h1><?php the_field('banner_text', 5); ?></h1>
				</div>

				<div class="col-sm-2"></div>
			</div>
			<div class="row">
				<div class="col-sm-2"></div>

				<div class="col-sm-8 reveal-up">
					
					<a id="boost">BOOST</a>
					<h2>JOIN OUR COMMUNITY</h2>

				</div>

				<div class="col-sm-2"></div>

			</div> -->

			<!-- <a href="#holistic_care" class="bounce smoothScroll glyphicon glyphicon-menu-down" id="down"></a> -->

				<div class="boost-block reveal-up">
					
					<a id="boost">BOOST</a>
					<h2>JOIN OUR COMMUNITY</h2>

				</div>
		</div>

	</div>
	<!-- end banner -->

	<!-- SIGNUP FORM POPUP -->
	<div id="boost-form" class="popup">
		<h2>GET A HEALTH <span class="supersize">BOOST</span> FROM DR. B</h2>
		<h3>Sign up for a monthly message: <br>
			Top 5 Healthy Tips You Can do Today!</h3>
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="//drbrendamccool.us14.list-manage.com/subscribe/post?u=0e09c5365bd24979f91d2f40f&amp;id=deb49e95fb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>				
				<div id="mc_embed_signup_scroll">			
					<input autocomplete="off" type="text" value="" placeholder="First Name" name="FNAME" class="required name" id="mce-FNAME">
					<input autocomplete="off" type="email" value="" name="EMAIL" placeholder="eMail Address" class="required email" id="mce-EMAIL">
					<label for="mce-FNAME"></label>
					<label for="mce-EMAIL"></label>
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    
				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0e09c5365bd24979f91d2f40f_deb49e95fb" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</form>
		</div>
		<!--End mc_embed_signup-->
	</div>
	<div id="boost-success" class="popup">
		<h2><span class="supersize">Thanks!</span></h2>
		<h3>We’ve got you on the list.</h3>
	</div>
	<!-- end SIGNUP FORM POPUP -->
	<div id="close-trigger" onclick="hideForm()"></div>





	<!-- holistic care -->
	<?php  $brenda = new WP_Query( 'page_id=7' ); 
	while( $brenda->have_posts() ) : $brenda->the_post(); ?>
		<div class="container-fluid page-anchor" id="holistic_care">
			<div class="row">
				<img class="full-width" src="<?php the_field('banner'); ?>">
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<h1 class="page-heading reveal-up"><?php the_title()?></h1>
					<h2 class="subheading reveal-up"><?php the_field('post-banner_text', 5); ?></h2>
					<?php 
					if(have_rows('content_block')):
						while( have_rows('content_block') ): the_row(); ?>
							<div class="brenda-block content-block reveal-up">
								<?php if( get_sub_field('subheading') ){ ?>
									<h2 class="subheading blue"><?php the_sub_field('subheading'); ?></h2>
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
		</div>
	<?php endwhile; 
	wp_reset_postdata();?>
	<!-- end holistic care -->

	<!-- TESTIMONIAL 1 -->
	<div class="row green-back testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('testimonial_1', 5); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 1 -->

	<!-- Services -->
	<div class="container-fluid page-anchor" id="services">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1 class="page-heading reveal-up">Services</h1>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<?php  $services = new WP_Query( array( 'post_type' => 'services' ) ); 
				while( $services->have_posts() ) : $services->the_post(); ?>
					<div class="service reveal-up">
						<a href="<?php the_permalink(); ?>">
							<div class="service-image" style="background-image: url('<?php the_field('preview_image'); ?>');">
								<div class="overlay"><p>Learn More</p></div>
							</div>
							<h2><?php the_title(); ?></h2>
							<p><?php the_field('preview_text'); ?></p>
						</a>
					</div>
				<?php
				endwhile;?>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	<!-- end Services -->



	<!-- TESTIMONIAL 2 -->
	<div class="row green-back testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-right">
			<?php the_field('testimonial_2', 5); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 2 -->

	<!-- Dr. McCool -->
	<?php  $brenda = new WP_Query( 'page_id=9' ); 
	while( $brenda->have_posts() ) : $brenda->the_post(); ?>
		<div class="container-fluid page-anchor" id="Dr_McCool">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<h1 class="page-heading reveal-up"><?php the_title(); ?></h1>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<img class="full-width reveal-up" src="<?php the_field('banner'); ?>">
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<?php 
					if(have_rows('content_block')):
						while( have_rows('content_block') ): the_row(); ?>
							<div class="content-block reveal-up">
								<?php if( get_sub_field('subheading') ){ ?>
									<h2 class="subheading blue"><?php the_sub_field('subheading'); ?></h2>
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
					<h2 class="subheading blue reveal-up">Ask a Question</h2>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				
				<?php echo do_shortcode('[contact-form-7 id="150" title="Homepage - Meet Brenda"]') ;?>
				
				<div class="col-sm-1"></div>
			</div>
		</div>
	<?php endwhile; 
	wp_reset_postdata();?>
	<!-- end brenda -->

	<!-- TESTIMONIAL 3 -->
	<div class="row green-back testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('testimonial_3', 5); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 3 -->

	<!-- schedule Services -->
	<?php  $schedule = new WP_Query( 'page_id=11' ); 
	while( $schedule->have_posts() ) : $schedule->the_post(); ?>
		<div class="container-fluid page-anchor" id="schedule">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<h1 class="page-heading reveal-up"><?php the_title(); ?></h1>
					<span class="reveal-up"><?php the_field('full-width_content'); ?></span>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-7" id="schedule-col">
					<?php 
					if(have_rows('content_block')):
						while( have_rows('content_block') ): the_row(); ?>
							<div class="content-block reveal-up">
								<?php if( get_sub_field('subheading') ){ ?>
									<h2 class="subheading blue"><?php the_sub_field('subheading'); ?></h2>
								<?php }; ?>
								<?php if( get_sub_field('body') ){ ?>
									<?php the_sub_field('body'); ?>
								<?php }; ?>
							</div>
							<?php
						endwhile;
					endif;?>
				</div>
				<div class="col-sm-3"></div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
<!-- 				<div class="col-sm-7 reveal-right">
					<?php //the_field('booking_shortcode'); ?>
				</div> -->
				<div class="col-sm-10">
					<h2 class="subheading blue ">Clinic Locations</h2>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div clas="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-5 reveal-left">
					
					<p class=""><?php the_field('address', 15); ?></p>
					<p><a class="grey " href="tel:<?php the_field('phone_number', 15); ?>"><?php the_field('phone_number_display', 15); ?></a></p>
					<p class=""><a target="_blank" href="https://www.google.com/maps/place/NW+Family+Wellness+Center,+LLC/@45.4339742,-122.5604618,17z/data=!3m1!4b1!4m5!3m4!1s0x5495758730bcf4bf:0xba3df2add9771699!8m2!3d45.4339705!4d-122.5582731">
						Get</a> Driving Directions</p>
</div>
				<div class="col-sm-5 reveal-left">
					<p class=""><?php the_field('address_two', 15); ?></p>
					<p><a class="grey " href="tel:<?php the_field('phone_number_two', 15); ?>"><?php the_field('phone_number_display_two', 15); ?></a></p>
					<p class=""><a target="_blank" href="https://www.google.com/maps/place/The+Natural+Medicine+Center/@45.5215207,-122.982683,17z/data=!3m1!4b1!4m5!3m4!1s0x54951aa5a432572b:0xa3c3834a4815dbd9!8m2!3d45.521517!4d-122.980489">
						Get</a> Driving Directions</p>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	<?php endwhile; 
	wp_reset_postdata();?>
	<!-- end schedule Services -->

	<!-- TESTIMONIAL 4 -->
	<div class="row green-back testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-right">
			<?php the_field('testimonial_4', 5); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 4 -->

	<!-- BLOG -->
	<?php
	$posts = new WP_Query( array('post_type' => 'post',
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => 4));
	?>
	<div class="container-fluid page-anchor" id="blog">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1 class="page-heading reveal-up">BLOG</h1>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-7 reveal-right">
				<?php the_content(); ?>
				<?php 
				if( $posts->have_posts() ):
					while( $posts->have_posts() ) : $posts->the_post();
					?>
					<div class="blog-preview">
						<a class="preview-photo" href="<?php the_permalink(); ?>" style="background-image:url('<?php the_field('image'); ?>');"></a>
						<a class="date" href="<?php the_permalink(); ?>"><p><?php echo get_the_date(); ?></p></a>
						<a href="<?php the_permalink(); ?>"><h2 class="blue"><?php the_title(); ?></h2></a>
						<p><?php the_field('preview_text'); ?><a href="<?php the_permalink(); ?>"> READ MORE...</a></p>
					</div>
					<?php
					endwhile;
				endif; ?>
			</div>

			<div class="col-sm-3 reveal-left" id="archive-links">
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
				<h3>Archive</h3>
				<ul class="link-list">
					<?php wp_get_archives( array( 'type' => 'monthly', 'order' => 'DESC', 'limit' => 6 ) )?>
					<li><a href="<?php the_permalink(166); ?>">All Posts</a></li>
				</ul>
			</div>

			<div class="col-sm-1"></div>
		</div>
	</div>
	<!-- end BLOG -->

	<!-- TESTIMONIAL 5 -->
	<div class="row green-back testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('testimonial_5', 5); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 5 -->

	<!-- contact -->
	<?php  $contact = new WP_Query( 'page_id=15' ); 
	while( $contact->have_posts() ) : $contact->the_post(); ?>
		<div class="container-fluid page-anchor" id="contact">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<h1 class="page-heading reveal-up"><?php the_title(); ?></h1>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-7 reveal-right">
					<?php 
					if(have_rows('content_block')):
						while( have_rows('content_block') ): the_row(); ?>
							<div class="content-block reveal-up">
								<?php if( get_sub_field('subheading') ){ ?>
									<h2 class="subheading blue"><?php the_sub_field('subheading'); ?></h2>
								<?php }; ?>
								<?php if( get_sub_field('body') ){ ?>
									<?php the_sub_field('body'); ?>
								<?php }; ?>
							</div>
							<?php
						endwhile;
					endif;?>

					<h2 class="subheading blue reveal-up">Clinic Locations</h2>
					<span style="line-height:1.25em;" class="reveal-up"><?php the_field('address'); ?></span>
					<p style="margin-top:-10px"><a class="grey reveal-up" href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number_display'); ?></a></p>
					<p class="reveal-up"><a target="_blank" href="https://www.google.com/maps/place/NW+Family+Wellness+Center,+LLC/@45.4339742,-122.5604618,17z/data=!3m1!4b1!4m5!3m4!1s0x5495758730bcf4bf:0xba3df2add9771699!8m2!3d45.4339705!4d-122.5582731">
						Get</a> Driving Directions</p>

						<br>
					<p class=""><?php the_field('address_two', 15); ?></p>
					<p><a class="grey " href="tel:<?php the_field('phone_number_two', 15); ?>"><?php the_field('phone_number_display_two', 15); ?></a></p>
					<p class=""><a target="_blank" href="https://www.google.com/maps/place/The+Natural+Medicine+Center/@45.5215207,-122.982683,17z/data=!3m1!4b1!4m5!3m4!1s0x54951aa5a432572b:0xa3c3834a4815dbd9!8m2!3d45.521517!4d-122.980489">
						Get</a> Driving Directions</p>
				</div>
				<div class="col-sm-3 reveal-left">
					<a href="#schedule" class="schedule-button">Schedule Appointment</a>
					<h2 class="subheading blue">My Hours:</h2>
					<p>
						<?php while( have_rows('hours') ): the_row(); ?>
							<span class="day"><?php the_sub_field('day'); ?></span> <span class="hours"><?php the_sub_field('hours'); ?></span><br>
						<?php endwhile; ?>
					</p>
					<div id="social">
						<?php if( have_rows('social_links') ):
							while( have_rows('social_links') ): the_row(); ?>
								<a class="social-link" target="_blank" href="<?php the_sub_field('link')?>">
									<img src="<?php the_sub_field('icon'); ?>">
								</a>
							<?php endwhile;
						endif; ?>
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row reveal-up">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<h2 class="subheading blue">Questions/Comments</h2>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row reveal-up">
				<div class="col-sm-1"></div>
				
				<?php echo do_shortcode('[contact-form-7 id="151" title="Homepage - Contact"]') ;?>
				
				<div class="col-sm-1"></div>
			</div>
			<div class="row reveal-up">
				<div id="map"></div>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUtrzcrd_8XD1sPwqIE0_atFy7LVo9_jo&callback=initMap">
				</script>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- end contact -->

	<!-- Scroll To Top Icon -->
	<a id="toTop" class="glyphicon glyphicon-menu-up"></a>
</main>

<?php get_footer(); ?>
