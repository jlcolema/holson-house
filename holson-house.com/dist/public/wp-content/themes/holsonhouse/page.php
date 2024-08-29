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

		<?php if ( have_rows( 'default_page_layout' ) ) : ?>

			<?php while ( have_rows( 'default_page_layout' ) ) : the_row(); ?>

				<?php if ( get_row_layout() == 'default_page_matrix_text' ) : ?>

					<div class="matrix-text">

						<?php the_sub_field( 'default_page_text' ); ?>

					</div>

				<?php elseif ( get_row_layout() == 'default_page_matrix_image' ) : ?>

					<div class="matrix-image">

						<div class="image with-caption">

							<figure>

								<img src="<?php the_sub_field( 'default_page_full_width_image' ); ?>" />

								<figcaption>

									<?php the_sub_field( 'default_page_full_width_image_caption' ); ?>

								</figcaption>

							</figure>

						</div>

					</div>

				<?php elseif ( get_row_layout() == 'default_page_matrix_images' ) : ?>

					<?php if ( have_rows( 'default_page_images' ) ) : ?>

						<div class="matrix-images">

							<?php while ( have_rows( 'default_page_images' ) ) : the_row(); ?>

								<div class="image <?php if ( get_sub_field( 'default_page_caption' ) ) { ?>with-caption<?php } ?>">

									<?php if ( get_sub_field( 'default_page_caption' ) ) { ?>

										<figure>

									<?php } ?>

										<img src="<?php the_sub_field( 'default_page_image' ); ?>" />

										<?php if ( get_sub_field( 'default_page_caption' ) ) { ?>

											<figcaption>

												<?php the_sub_field( 'default_page_caption' ); ?>

											</figcaption>

										<?php } ?>

									<?php if ( get_sub_field( 'default_page_caption' ) ) { ?>

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
