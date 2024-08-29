<?php get_header(); ?>

	<?php

		/* Section */

	?>

	<div class="section">

		<h1>404</h1>

	</div>

	<?php

		/* Body */

	?>

	<div class="body">

		<?php if ( have_rows( 'error_layout' ) ) : ?>

			<?php while ( have_rows( 'error_layout' ) ) : the_row(); ?>

				<?php if ( get_row_layout() == 'error_matrix_text' ) : ?>

					<div class="matrix-text">

						<?php the_sub_field( 'error_text' ); ?>

					</div>

				<?php elseif ( get_row_layout() == 'error_matrix_image' ) : ?>

					<div class="matrix-image">

						<div class="image <?php if ( get_sub_field( 'error_full_width_image_caption' ) ) { ?>with-caption<?php } ?>">

							<?php if ( get_sub_field( 'error_full_width_image_caption' ) ) { ?>

								<figure>

							<?php } ?>

								<img src="<?php the_sub_field( 'error_full_width_image' ); ?>" alt="<?php the_sub_field( 'error_full_width_image_description' ); ?>" />

								<?php if ( get_sub_field( 'error_full_width_image_caption' ) ) { ?>

									<figcaption>

										<?php the_sub_field( 'error_full_width_image_caption' ); ?>

									</figcaption>

								<?php } ?>

							<?php if ( get_sub_field( 'error_full_width_image_caption' ) ) { ?>

								</figure>

							<?php } ?>

						</div>

					</div>

				<?php elseif ( get_row_layout() == 'error_matrix_images' ) : ?>

					<?php if ( have_rows( 'error_images' ) ) : ?>

						<div class="matrix-images">

							<?php while ( have_rows( 'error_images' ) ) : the_row(); ?>

								<div class="image <?php if ( get_sub_field( 'error_image_caption' ) ) { ?>with-caption<?php } ?>">

									<?php if ( get_sub_field( 'error_image_caption' ) ) { ?>

										<figure>

									<?php } ?>

										<img src="<?php the_sub_field( 'error_image' ); ?>" alt="<?php get_sub_field( 'error_image_description' ); ?>" />

										<?php if ( get_sub_field( 'error_image_caption' ) ) { ?>

											<figcaption>

												<?php the_sub_field( 'error_image_caption' ); ?>

											</figcaption>

										<?php } ?>

									<?php if ( get_sub_field( 'error_image_caption' ) ) { ?>

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

<?php get_footer(); ?>
