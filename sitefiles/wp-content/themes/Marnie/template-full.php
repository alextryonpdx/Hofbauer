<?php /* Template Name: Ann Marie Hofbauer Template (FULL WIDTH 1-10-1) */ get_header(); ?>

<main id="content">

	<div id="home" class="full-width" style="background-image:url('<?php the_field('background', 5 ); ?>')">
		<div id="banner-copy">
			<div class="row" id="banner-foreground">
				<div class="col-md-2 col-xl-3"></div>

				<div class="col-md-8 col-xl-6 reveal-up">
					<div id="home-heading">
						<h1 id="heading"><?php the_field('heading', 5); ?></h1>
						<h1 id="subheading"><?php the_field('subheading', 5); ?></h1>
					</div>
					<div id="enter">
						<a class="smoothScroll" href="#here-for-you">
							<h2>SCROLL TO<br/>ENTER</h2>
						</a>
					</div>
				</div>

				<div class="col-md-2 col-xl-3"></div>
			</div>

		</div>

	</div>
	<!-- end banner -->

	<!-- here for you -->
	<div id="here-for-you" class="section row">
		<img class="full-width reveal-up" src="<?php echo get_field('image', 4540); ?>">
		<div class="col-md-2"></div>
		<div class="col-md-8 reveal-up justified">
			<h1><?php echo get_the_title(4540); ?></h1>
			<?php echo get_field('content', 4540); ?>
		</div>
		<div class="col-md-2"></div>
	</div>
	<!-- end here for you -->


	<!-- TESTIMONIAL 1 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 testimonial-text reveal-left">
			<?php the_field('divider_1', 4556); ?>
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>
	<!-- end TESTIMONIAL 1 -->


	<!-- Dr. Hofbauer -->
	<div id="dr-hofbauer" class="full-width row section">
		<?php $drId = 4542; $dr = get_post($drId); ?>
		<div class="col-md-1 col-xl-2"></div>
		<div class="col-md-2 col-xl-2 reveal-right centered col-12">
			<?php echo get_the_post_thumbnail($drId); ?>
		</div>
		<div class="col-md-8 col-xl-6 reveal-left">
			<h1><?php echo $dr->post_title; ?></h1>
			<div class="readmore">
				<div class="excerpt justified"><?php the_field('excerpt', 4542); ?><a>Read More...</a></div>
				<div class="content justified"><?php the_field('content', 4542); ?></div>
			</div>
		</div>
		<div class="col-md-1 col-xl-2"></div>
	</div>
	<!-- end Dr. Hofbauer -->


	<!-- TESTIMONIAL 2 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 testimonial-text reveal-left">
			<?php the_field('divider_2', 4556); ?>
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>
	<!-- end TESTIMONIAL 2 -->


	<!-- Team -->
	<div id="team" class="section">
		<div class="full-width row">
			<div class="col-md-3 col-xl-3"></div>
			<div class="col-2 col-md-1  reveal-right centered"><span id="prev-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/next-arrow-magento.png"></span></div>
			<div class="col-8 col-md-4 col-xl-4 reveal-up">
				<h1>TEAM</h1>
				<?php $team = get_field('team', 4544); ?>
				<div id="team-photos">
					<?php foreach ($team as $person ) {
						echo '<div class="team-member-photo">';
						echo '<img src="' . $person['photo'] . '">';
						echo '</div>';
					}
					?>
				</div>
			</div>
			<div class="col-2 col-md-1  reveal-left centered"><span id="next-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/prev-arrow-magento.png"></span></div>
			<div class="col-md-3 col-xl-3"></div>
		</div>

		<div class="full-width row">
			<div class="col-md-2 col-xl-2"></div>
			<div class="col-md-8 col-xl-8 reveal-up">
				<div id="team-bios">
					<?php foreach ($team as $person ) {
						echo '<div class="team-member-bio">';
						echo '<h3>' . $person['name'] . '</h3>';
						echo '<p>' . $person['bio'] . '</p>';
						echo '</div>';
					}
					?>
				</div>
			</div>
			<div class="col-md-2 col-xl-2"></div>
		</div>
	</div>
	<!-- end Team -->


	<!-- TESTIMONIAL 3 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 testimonial-text reveal-left">
			<?php the_field('divider_3', 4556); ?>
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>
	<!-- end TESTIMONIAL 3 -->


	<!-- Procedures -->
	<div id="procedures" class="full-width row section">
		<?php $procedures = get_field('procedures', 4546); 
				$count = 0; ?>
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 reveal-up">
			<h1>Procedures</h1>
			<div class="justified"><?php the_field('content', 4546); ?></div>
			<div id="procedure-list" class="columns3 reveal-up">
				<?php foreach ($procedures as $procedure ) { ?>
					<p><?php echo $procedure['procedure'] ?> - <a onclick="showOverlay('<?php echo $count; ?>')"><?php 
					if(!$procedure['more_info']){ ?>
							Before/After
					<?php } else { ?>
							More Info
					<?php } ?></a></p>

				<?php $count++;
					} ?>
				
			</div>
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>

	<div class="overlay row">
		<div class="col-md-1"></div>
		<div id="overlay-prev-arrow" class="col-md-1 col-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/prev-arrow.png"></div>
		<div class="overlay-slider col-8 col-md-8">
			<?php foreach ( $procedures as $procedure ) { ?>
				<div class="before-after">
					<a class="hide-overlay" onclick="hideOverlay()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/close-icon.png"></a>
					<div class="before">
						<img src="<?php echo $procedure['before_image'] ?>">
					</div>
					<div class="after">
						<img src="<?php echo $procedure['after_image'] ?>">
					</div>
					<?php echo '<p><span class="orange">' . $procedure['procedure'] . '</span> ' . $procedure['before_after_text'] . '</p>' ?>
				</div>
			<?php
			} ?>
		</div>
		<div id="overlay-next-arrow" class="col-md-1 col-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/next-arrow.png"></div>
		<div class="col-md-1"></div>
	</div>
	<!-- end Procedures -->


	<!-- TESTIMONIAL 4 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 testimonial-text reveal-left">
			<?php the_field('divider_4', 4556); ?>
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>
	<!-- end TESTIMONIAL 4 -->

	<!-- forms -->
	<div id="forms-and-financial" class="section">
		<div class="full-width row">
			<div class="col-md-2"></div>
			<div class="col-md-8 reveal-up">
				<h1>FORMS + FINANCIAL</h1>
				<div class="justified"><?php the_field('text', 4548); ?></div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="full-width row">
			<div class="col-md-2"></div>
			<div class="col-md-8 row">
				<div class="col-md-4 reveal-up full-mobile">
					<h3>New Patients</h3>
					<?php 
					$forms = get_field('new_patients', 4548);
					foreach ($forms as $form ) {
						echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
					}
					?>

					
				</div>
				<div class="col-md-4 reveal-up full-mobile">
					<h3>Surgical Patients</h3>
					<?php 
					$forms = get_field('surgical_patients', 4548);
					foreach ($forms as $form ) {
						echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
					}
					?>
				</div>
				<div class="col-md-4 reveal-up full-mobile">
					<h3>Referring Dentists</h3>
					<?php 
					$forms = get_field('referring_dentists', 4548);
					foreach ($forms as $form ) {
						echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
					}
					?>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="full-width row">
			<div class="col-md-2"></div>
			<div class="col-md-8 row">
				<div class="col-md-4 reveal-up full-mobile">
					<h3>Pacientes nuevos</h3>
					<?php 
					$forms = get_field('new_patients_spanish', 4548);
					foreach ($forms as $form ) {
						echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
					}
					?>
				</div>
				<div class="col-md-4 reveal-up full-mobile">
					<h3>Pacientes quirúrgicos</h3>
				<?php 
				$forms = get_field('surgical_patients_spanish', 4548);
				foreach ($forms as $form ) {
					echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
				}
				?>
				</div>
				<div class="col-md-4 reveal-up full-mobile"></div>
			</div>
		<div class="col-md-2"></div>
		</div>
		<div class="full-width row">
			<div class="col-md-2 col-xl-2"></div>
			<div class="col-md-8 col-xl-8 reveal-up">
				<div class="justified"><?php the_field('post-form_text', 4548); ?></div>
			</div>
			<div class="col-md-2 col-xl-2"></div>
		</div>
	</div>
	<!-- end forms -->


	<!-- TESTIMONIAL 5 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2"></div>
		<div class="col-md-8 testimonial-text reveal-left">
			<?php the_field('divider_5', 4556); ?>
		</div>
		<div class="col-md-2"></div>
	</div>
	<!-- end TESTIMONIAL 5 -->


	<!-- BLOG -->
	<?php
	//$posts = new WP_Query( array('post_type' => 'post',
	//							'orderby' => 'date',
	//							'order' => 'DESC',
	//							'posts_per_page' => 8));
	?>
<!-- 	<div id="blog" class="section">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 class="page-heading reveal-up">BLOG</h1>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2 col-xl-2"></div>
			<div class="col-md-5 col-xl-6 blog-previews reveal-up">

				<?php 
				// if( $posts->have_posts() ):
				// 	$count = 1;
				// 	while( $posts->have_posts() ) : $posts->the_post(); ?>

						<div class="blog-preview col-md-6">
							<a class="preview-photo" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></a>
							<a href="<?php the_permalink(); ?>"><h3 class="orange"><?php the_title(); ?></h3></a>
							<a class="date grey" href="<?php the_permalink(); ?>"><p><?php echo get_the_date(); ?></p></a>
						</div>
						<?php
				// 		if( $count == 4 ){

				// 			echo '<a class="show-button reveal-up">SHOW MORE</a>';
				// 			echo '<div class="more-items">';
				// 		}
				// 		$count++;
				// 	endwhile;
				// 	if( $count > 4 ){
				// 		echo '</div>';
				// 	}
				// endif; ?>
			</div>

			<div class="col-md-3 col-xl-2 reveal-left" id="archive-links">
				<h2>RECENT POSTS</h2>
				<div class="link-list">
				<?php //$recent = new WP_Query( array(
							//	'post_type' => 'post',
							//	'orderby' => 'date',
							//	'numberposts' => 4,
							//	'order' => 'DESC',
							//	'posts_per_page' => 6) );

					//while ($recent->have_posts() ) : $recent->the_post(); ?>

						<p><a href="<?php the_permalink() ?>"><span class="orange"><?php the_title() ?></span><br><span class="grey"><?php echo get_the_date(); ?></span></a></p>
						<?php 
						
//					endwhile; ?>
				</div>

				<p>&nbsp;</p>
				
				<h2>ARCHIVE</h2>
				<div class="link-list">
					<?php //wp_get_archives( array( 'type' => 'monthly', 'order' => 'DESC', 'limit' => 6, 'format' => 'custom', 'after' => '<br/>' ) )?>
					<a class="orange" href="<?php the_permalink(4550); ?>">All Posts</a>
				</div>

			</div>

			<div class="col-md-2 col-xl-2"></div>
		</div>
	</div> -->
	<!-- end BLOG -->


	<!-- TESTIMONIAL 6 -->
<!-- 	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2 "></div>
		<div class="col-md-8 testimonial-text reveal-left">
			<?php the_field('divider_6', 4556); ?>
		</div>
		<div class="col-md-2 "></div>
	</div> -->
	<!-- end TESTIMONIAL 6 -->


	<!-- Research & Community Connection -->
	<div id="research-and-community-connection" class="section ">
		<div class="full-width row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 class="reveal-up">RESEARCH + COMMUNITY CONNECTION</h1>
				<div class="reveal-up justified"><?php the_field('content', 4552); ?></div>
			</div>
			<div class="col-md-2"></div>
		</div>
<!-- 		<div class="full-width row">
			<div class="col-md-2 col-xl-2"></div>
			<div class="col-md-8 col-xl-8 reveal-up">
				<h3 class="reveal-up">Professional Articles</h3>
				<?php 
				$articles = get_field('articles', 4552);
				foreach ($articles as $article ) {
					if( $article['link'] ){ ?>
						<p class="reveal-up"><a target="_blank" href="<?php echo $article['link']?>"><?php echo $article['title']?></a></p>
					<?php } else { ?>
						<p class="reveal-up"><?php echo $article['title']?></p>
					<?php }
				}
				?>
			</div>
			<div class="col-md-2 col-xl-2"></div>
		</div>
		<div class="full-width row">
			<div class="col-md-2 col-xl-2"></div>
			<div class="col-md-8 col-xl-8">
				<h3 class="reveal-up">Workshops and Lectures</h3>
				<?php 
				$workshops = get_field('workshops', 4552);
				foreach ($workshops as $workshop ) {
					if( $workshop['link'] ){ ?>
						<p class="reveal-up"><a target="_blank" href="<?php echo $workshop['link']?>"><?php echo $workshop['title']?></a></p>
					<?php } else { ?>
						<p class="reveal-up"><?php echo $workshop['title']?></p>
					<?php }
				}
				?>
			</div>
			<div class="col-md-2 col-xl-2"></div>
		</div>
		<div class="full-width row">
			<div class="col-md-2 col-xl-2"></div>
			<div class="col-md-8 col-xl-8">
				<h3 class="reveal-up">Volunteer Organizations</h3>
				<?php 
				$organizations = get_field('organizations', 4552);
				foreach ($organizations as $organization ) {
					if( $organization['link'] ){ ?>
						<p class="reveal-up"><a target="_blank" href="<?php echo $organization['link']?>"><?php echo $organization['title']?></a></p>
					<?php } else { ?>
						<p class="reveal-up"><?php echo $organization['title']?></p>
					<?php }
				}
				?>
			</div>
			<div class="col-md-2 col-xl-2"></div>
		</div> -->
	</div>
	<!-- end Research & Community Connection -->


	<!-- TESTIMONIAL 7 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2"></div>
		<div class="col-md-8 testimonial-text reveal-left">
			<?php the_field('divider_7', 4556); ?>
		</div>
		<div class="col-md-2"></div>
	</div>
	<!-- end TESTIMONIAL 7 -->



	<!-- Links -->
	<div id="links" class="section">
		<div class="full-width row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 class="reveal-up">LINK LIBRARY</h1>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="full-width row">
			<div class="col-md-2"></div>
			<div class="col-md-4 reveal-up">
				<h3 class="reveal-left">Tech Information</h3>
				<?php the_field('tech_information', 4554); ?>
				<h3 class="reveal-left">Helpful Links</h3>
				<?php the_field('helpful_links', 4554); ?>
			</div>
			<div class="col-md-4 reveal-up">
				<h3 class="reveal-left">Oral Hygiene Projects</h3>
				<?php the_field('oral_hygiene_projects', 4554); ?>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<!-- end Links -->



	<!-- TESTIMONIAL 8 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 testimonial-text reveal-left">
			<?php the_field('divider_8', 4556); ?>
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>
	<!-- end TESTIMONIAL 8 -->



	<!-- Testimonials -->
	<div id="testimonials" class="full-width row section">
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 reveal-up">
			<h1>TESTIMONIALS</h1>

			<?php 
			$testimonials = get_field('testimonials', 4556);
			$count = 1;
			foreach ( $testimonials as $entry ) { 
				if( $count == 3 ){
					echo '<div class="showmore">';
				}?>
				<?php if ( $entry['testimonial'] ){ ?>
				<div class="readmore testimonial justified">
					<h3 class="grey"><?php echo $entry['name']; ?></h3>
					<div class="excerpt"><?php echo  $entry['testimonial_excerpt']; ?><a>Read More...</a></div>
					<div class="content"><?php echo $entry['testimonial']; ?></div>
				</div>
				<?php }else {?>
				<div class="testimonial">
					<h3 class="grey"><?php echo $entry['name']; ?></h3>
					<div class="excerpt"><?php echo  $entry['testimonial_excerpt']; ?></div>
				</div>
				<?php }
				if( $count == 3 ){
					echo '</div>';
					echo '<a class="show-button reveal-up">SHOW MORE</a>';
					echo '<div class="more-items">';
				}
				$count++;
			}
			if( $count > 3 ){
				echo '</div>';
			}
			?>
			
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>
	<!-- end Testimonials -->



	<!-- TESTIMONIAL 9 -->
	<div class="row gradient testimonial reveal-right">
		<div class="col-md-2 col-xl-2"></div>
		<div class="col-md-8 col-xl-8 testimonial-text reveal-left">
			<?php the_field('divider_9', 4556); ?>
		</div>
		<div class="col-md-2 col-xl-2"></div>
	</div>
	<!-- end TESTIMONIAL 9 -->



	<!-- contact -->
	<div id="contact" class="full-width section">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1 class="reveal-up">Contact</h1>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-3 reveal-left">
				<p><span style="font-size:18px">Give us a call.</span></p>
				<p>We are here to answer questions and happy to help you set up your appointment.</p>
				<br>
				<p>Call 503.474.9888 or <a href="#">eMail</a> us</p>
				<br>
				<p><span class="orange">Office Hours</span> 8:00am - 5:00pm<br>
				Tuesday - Friday, by Appt.</p>
				<br>
				<p><span class="orange">Location</span> 2260 SW 2ND Street<br>
				McMinnville, Oregon 97128</p>
				
			</div>
			<div class="col-md-5">
				<div id="map"></div>
				<div id="contact-form">
					<div id="message"></div>
	                <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/php/contact-form.php" name="contactform" class="contact-form" id="contactform">
	                    <fieldset>
	                            <input name="name" type="text" id="name" placeholder="Name"/> 
	                            <input name="email" type="text" id="email" placeholder="Email"/>  
	                            <input name="phone" type="text" id="phone" placeholder="Phone Number"/> 
	                    </fieldset>
	                     <fieldset class="radios">
	                      <p class="radio-group-label">I am a:</p>
	                      <ul class="radio-lists">
		                      <li><label><input name="patientType" value="new" id="new" type="radio"><span class="contact-radio"></span>New Patient</label></li>
		                      <li><label><input name="patientType" value="current" id="current" type="radio"><span class="contact-radio"></span>Current Patient</label></li>
		                  </ul>
	                    </fieldset>
	                    <fieldset class="radios">
	                      <p class="radio-group-label">Please contact me by:</p>
	                      <ul class="radio-lists">
		                      <li><label><input name="contactBy" value="email" id="contact-email" type="radio"><span class="contact-radio"></span>Email</label></li>
		                      <li><label><input name="contactBy" value="phone" id="contact-phone" type="radio"><span class="contact-radio"></span>Phone</label></li>
		                  </ul>
	                    </fieldset>
	                    <fieldset> 

	                            <textarea name="comments" cols="40" rows="4" id="comments" placeholder="What can we do for you?"></textarea>
	                    </fieldset>
	                    <input type="submit" class="submit green-back white-head" id="submit" value="Send" />
	                </form>
	            </div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<!-- end contact -->








	<!-- Scroll To Top Icon -->
	<!-- <a id="toTop" class="glyphicon glyphicon-menu-up"></a> -->


<?php get_footer(); ?>