<?php /* Template Name: Ann Marie Hofbrauer Template (FULL WIDTH 1-10-1) */ get_header(); ?>

<main id="content">

	<div id="banner" class="full-width" style="background-image:url('<?php the_field('background', 5 ); ?>')">
		<div id="banner-copy">
			<div class="row" id="banner-foreground">
				<div class="col-sm-1"></div>

				<div class="col-sm-10 reveal-up">
					<div id="home-heading">
						<h1><?php the_field('heading', 5); ?></h1>
						<h1><?php the_field('subheading', 5); ?></h1>
					</div>
				</div>

				<div class="col-sm-1"></div>
			</div>

		</div>

	</div>
	<!-- end banner -->

	<!-- here for you -->
	<div id="here-for-you" class="full-width row section">
		<img class="full-width" src="<?php echo get_field('image', 4540); ?>">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h1><?php echo get_the_title(4540); ?></h1>
			<?php echo get_field('content', 4540); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end here for you -->


	<!-- TESTIMONIAL 1 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_1', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 1 -->


	<!-- Dr. Hofbauer -->
	<div id="dr-hofbauer" class="full-width row section">
		<?php $drId = 4542; $dr = get_post($drId); ?>
		<div class="col-sm-1"></div>
		<div class="col-sm-2">
			<?php echo get_the_post_thumbnail($drId); ?>
		</div>
		<div class="col-sm-8">
			<h1><?php echo $dr->post_title; ?></h1>
			<div class="readmore">
				<div class="excerpt"><?php echo wp_trim_words( $dr->post_content , '55' ); ?><a>Read More...</a></div>
				<div class="content"><?php echo $dr->post_content; ?></div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end Dr. Hofbauer -->


	<!-- TESTIMONIAL 2 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_2', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 2 -->


	<!-- Team -->
	<div id="team" class="section">
		<div class="full-width row">
			<div class="col-sm-1"></div>
			<div class="col-sm-1"><span id="prev-arrow">...<span></div>
			<div class="col-sm-8">
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
			<div class="col-sm-1"><span id="next-arrow">...</span></div>
			<div class="col-sm-1"></div>
		</div>
		<div class="full-width row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
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
			<div class="col-sm-1"></div>
		</div>
	</div>
	<!-- end Team -->


	<!-- TESTIMONIAL 3 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_3', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 3 -->


	<!-- Procedures -->
	<div id="procedures" class="full-width row section">
		<?php $procedures = get_field('procedures', 4546); 
				$count = 0; ?>
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h1>Procedures</h1>
			<?php the_field('content', 4546); ?>
			<div id="procedure-list" class="columns2">
				<?php foreach ($procedures as $procedure ) { ?>
					<p><?php echo $procedure['procedure'] ?> - <a onclick="showOverlay('<?php echo $count; ?>')">Before/After</a></p>
				<?php $count++;
					} ?>
				<div class="overlay row">
					<div id="overlay-prev-arrow" class="col-sm-1"> <<< </div>
					<div class="overlay-slider col-sm-10">
						<?php foreach ( $procedures as $procedure ) { ?>
							<div class="before-after">
								<a class="hide-overlay" onclick="hideOverlay()">X</a>
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
					<div id="overlay-next-arrow" class="col-sm-1"> >>> </div>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end Procedures -->


	<!-- TESTIMONIAL 4 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_4', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 4 -->


	<!-- forms -->
	<div id="forms" class="section">
		<div class="full-width row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>FORMS &amp; FINANCIAL</h1>
				<p><?php the_field('text', 4548); ?></p>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="full-width row">
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<h3>New Patients:</h3>
				<?php 
				$forms = get_field('new_patients', 4548);
				foreach ($forms as $form ) {
					echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
				}
				?>
			</div>
			<div class="col-sm-5">
				<h3>Pacientes nuevos (En español):</h3>
				<?php 
				$forms = get_field('new_patients_spanish', 4548);
				foreach ($forms as $form ) {
					echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
				}
				?>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="full-width row">
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<h3>Surgical Patients:</h3>
				<?php 
				$forms = get_field('surgical_patients', 4548);
				foreach ($forms as $form ) {
					echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
				}
				?>
			</div>
			<div class="col-sm-5">
				<h3>Pacientes quirúrgicos (En español):</h3>
				<?php 
				$forms = get_field('surgical_patients_spanish', 4548);
				foreach ($forms as $form ) {
					echo '<p>' . $form['title'] . ' - <a target="_blank" href="' . $form['form'] . '">Download</a></p>';
				}
				?>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	<!-- end forms -->


	<!-- TESTIMONIAL 5 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_5', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 5 -->


	<!-- BLOG -->
	<?php
	$posts = new WP_Query( array('post_type' => 'post',
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => 6));
	?>
	<div class="full-width row section" id="blog">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1 class="page-heading reveal-up">BLOG</h1>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10 reveal-right">

				<?php 
				if( $posts->have_posts() ):
					while( $posts->have_posts() ) : $posts->the_post();
					?>
					<div class="blog-preview">
						<a class="preview-photo" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></a>
						<a href="<?php the_permalink(); ?>"><h2 class="blue"><?php the_title(); ?></h2></a>
						<a class="date" href="<?php the_permalink(); ?>"><p><?php echo get_the_date(); ?></p></a>
					</div>
					<?php
					endwhile;
				endif; ?>
			</div>

<!-- 			<div class="col-sm-3 reveal-left" id="archive-links">
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
			</div> -->

			<div class="col-sm-1"></div>
		</div>
	</div>
	<!-- end BLOG -->


	<!-- TESTIMONIAL 6 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_6', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 6 -->



	<!-- TESTIMONIAL 7 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_7', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 7 -->



	<!-- TESTIMONIAL 8 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_8', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 8 -->



	<!-- TESTIMONIAL 9 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_9', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 9 -->



	<!-- TESTIMONIAL 10 -->
	<div class="row gradient testimonial">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 testimonial-text reveal-left">
			<?php the_field('divider_10', 4556); ?>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<!-- end TESTIMONIAL 10 -->






	<!-- Scroll To Top Icon -->
	<a id="toTop" class="glyphicon glyphicon-menu-up"></a>
</main>

<?php get_footer(); ?>