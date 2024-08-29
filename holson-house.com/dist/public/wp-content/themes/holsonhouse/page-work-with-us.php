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

		<?php if ( have_rows( 'work_with_us_layout' ) ) : ?>

			<?php while ( have_rows( 'work_with_us_layout' ) ) : the_row(); ?>

				<?php if ( get_row_layout() == 'work_with_us_matrix_text' ) : ?>

					<div class="matrix-text">

						<?php the_sub_field( 'work_with_us_text' ); ?>

					</div>

				<?php elseif ( get_row_layout() == 'work_with_us_matrix_image' ) : ?>

					<div class="matrix-image">

						<div class="image <?php if ( get_sub_field( 'work_with_us_full_width_image_caption' ) ) { ?>with-caption<?php } ?>">

							<?php if ( get_sub_field( 'work_with_us_full_width_image_caption' ) ) { ?>

								<figure>

							<?php } ?>

								<img src="<?php the_sub_field( 'work_with_us_full_width_image' ); ?>" alt="<?php the_sub_field( 'work_with_us_full_width_image_description' ); ?>" />

								<?php if ( get_sub_field( 'work_with_us_full_width_image_caption' ) ) { ?>

									<figcaption>

										<?php the_sub_field( 'work_with_us_full_width_image_caption' ); ?>

									</figcaption>

								<?php } ?>

							<?php if ( get_sub_field( 'work_with_us_full_width_image_caption' ) ) { ?>

								</figure>

							<?php } ?>

						</div>

					</div>

				<?php elseif ( get_row_layout() == 'work_with_us_matrix_images' ) : ?>

					<?php if ( have_rows( 'work_with_us_images' ) ) : ?>

						<div class="matrix-images">

							<?php while ( have_rows( 'work_with_us_images' ) ) : the_row(); ?>

								<div class="image <?php if ( get_sub_field( 'work_with_us_image_caption' ) ) { ?>with-caption<?php } ?>">

									<?php if ( get_sub_field( 'work_with_us_image_caption' ) ) { ?>

										<figure>

									<?php } ?>

										<img src="<?php the_sub_field( 'work_with_us_image' ); ?>" alt="<?php get_sub_field( 'work_with_us_image_description' ); ?>" />

										<?php if ( get_sub_field( 'work_with_us_image_caption' ) ) { ?>

											<figcaption>

												<?php the_sub_field( 'work_with_us_image_caption' ); ?>

											</figcaption>

										<?php } ?>

									<?php if ( get_sub_field( 'work_with_us_image_caption' ) ) { ?>

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

		/* Contact Form */

	?>

	<div class="contact-form">

		<?php echo do_shortcode( '[contact-form-7 id="80" title="Contact"]' ); ?>

	</div>

<?php get_footer(); ?>
