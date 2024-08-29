<?php get_header(); ?>

	<?php

		/* Section */

	?>

	<div class="section">

		<h1><?php the_title(); ?></h1>

	</div>

	<?php

		/* Body */

	?>

	<div class="body">

		<?php if ( have_rows( 'about_layout' ) ) : ?>

			<?php while ( have_rows( 'about_layout' ) ) : the_row(); ?>

				<?php if ( get_row_layout() == 'about_matrix_text' ) : ?>

					<div class="matrix-text">

						<?php the_sub_field( 'about_text' ); ?>

					</div>

				<?php elseif ( get_row_layout() == 'about_matrix_image' ) : ?>

					<div class="matrix-image">

						<div class="image <?php if ( get_sub_field( 'about_full_width_image_caption' ) ) { ?>with-caption<?php } ?>">

							<?php if ( get_sub_field( 'about_full_width_image_caption' ) ) { ?>

								<figure>

							<?php } ?>

								<img src="<?php the_sub_field( 'about_full_width_image' ); ?>" alt="<?php the_sub_field( 'about_full_width_image_description' ); ?>" />

								<?php if ( get_sub_field( 'about_full_width_image_caption' ) ) { ?>

									<figcaption>

										<?php the_sub_field( 'about_full_width_image_caption' ); ?>

									</figcaption>

								<?php } ?>

							<?php if ( get_sub_field( 'about_full_width_image_caption' ) ) { ?>

								</figure>

							<?php } ?>

						</div>

					</div>

				<?php elseif ( get_row_layout() == 'about_matrix_images' ) : ?>

					<?php if ( have_rows( 'about_images' ) ) : ?>

						<div class="matrix-images">

							<?php while ( have_rows( 'about_images' ) ) : the_row(); ?>

								<div class="image <?php if ( get_sub_field( 'about_image_caption' ) ) { ?>with-caption<?php } ?>">

									<?php if ( get_sub_field( 'about_image_caption' ) ) { ?>

										<figure>

									<?php } ?>

										<img src="<?php the_sub_field( 'about_image' ); ?>" alt="<?php get_sub_field( 'about_image_description' ); ?>" />

										<?php if ( get_sub_field( 'about_image_caption' ) ) { ?>

											<figcaption>

												<?php the_sub_field( 'about_image_caption' ); ?>

											</figcaption>

										<?php } ?>

									<?php if ( get_sub_field( 'about_image_caption' ) ) { ?>

										</figure>

									<?php } ?>

								</div>

							<?php endwhile; ?>

						</div>

					<?php endif; ?>

				<?php endif; ?>

			<?php endwhile; ?>

		<?php else : ?>

			<p>No layouts found.</p>

		<?php endif; ?>

	</div>

	<?php

		/* Press */

	?>

	<div class="press">

		<div class="title">

			<h2>Press</h2>

		</div>

		<div class="listing">

			<ul>

				<?php

					/* Press Listing */

				?>

				<?php

					$press_listing_options = array(

						'post_type'		=> 'article',
						'post_status'	=> 'publish',
						'numberposts'	=> -1,
						'order'			=> 'ASC',
						'orderby'		=> 'menu_order'

					);

					$articles = get_posts( $press_listing_options );

				?>

				<?php foreach( $articles as $article ) : ?>

					<?php

						// Publisher

						// $article_publisher = get_field( 'article_publisher', $article->ID );

						// URL

						$article_publisher = get_field( 'article_publisher', $article->ID );

						$article_url = get_field( 'article_url', $article->ID );

					?>

					<li>

						<?php if ( $article_url ) { ?>

							<a href="<?php echo $article_url; ?>" rel="external">

						<?php } ?>

							<h3><?php echo $article_publisher; ?></h3>

							<h4><?php echo $article->post_title; ?></h4>

						<?php if ( $article_url ) { ?>

							</a>

						<?php } ?>

					</li>

				<?php endforeach; ?>

			</ul>

		</div>

	</div>

	<?php

		/* Speaking */

	?>

	<div class="speaking">

		<div class="title">

			<h2>Speaking</h2>

		</div>

		<div class="listing">

			<ol>

				<?php

					/* Speaking Listing */

				?>

				<?php

					$event_listing_options = array(

						'post_type'		=> 'event',
						'post_status'	=> 'publish',
						'numberposts'	=> -1,
						'order'			=> 'ASC',
						'orderby'		=> 'menu_order'

					);

					$events = get_posts( $event_listing_options );

				?>

				<?php foreach( $events as $event ) : ?>

					<?php

						// Date

						$event_date = get_field( 'event_date', $event->ID );

						// URL

						$event_url = get_field( 'event_url', $event->ID );

					?>

					<li>

						<?php if ( $event_url ) { ?>

							<a href="<?php echo $event_url; ?>" rel="external">

						<?php } ?>

							<h3><?php echo $event->post_title; ?></h3>

							<time datetime=""><?php echo $event_date; ?></time>

						<?php if ( $event_url ) { ?>

							</a>

						<?php } ?>

					</li>

				<?php endforeach; ?>

			</ol>

		</div>

	</div>

<?php get_footer(); ?>