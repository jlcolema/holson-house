<?php get_header(); ?>

	<?php

		/* Article */

	?>

	<article id="article" class="hentry">

		<!-- Title -->

		<header class="title">

			<h1><?php the_title(); ?></h1>

		</header>

		<!-- Meta -->

		<footer class="meta">

			<time datetime="<?php echo date( DATE_W3C ); ?>"><?php the_time( 'F jS, Y' ); ?></time>

		</footer>

		<!-- Body -->

		<div class="body">

			<?php if ( have_rows( 'post_layout' ) ) : ?>

				<?php while ( have_rows( 'post_layout' ) ) : the_row(); ?>

					<?php if ( get_row_layout() == 'post_matrix_text' ) : ?>

						<div class="matrix-text">

							<?php the_sub_field( 'post_text' ); ?>

						</div>

					<?php elseif ( get_row_layout() == 'post_matrix_image' ) : ?>

						<div class="matrix-image">

							<div class="image with-caption">

								<figure>

									<div class="share-wrap">

										<img src="<?php the_sub_field( 'post_full_width_image' ); ?>" alt="<?php the_sub_field( 'post_full_width_image_description' ); ?>" />

										<div class="share">

											<a href="https://www.pinterest.com/pin/create/button/?url=<?php echo urlencode( get_the_permalink() ); ?>&media=<?php echo urlencode( the_sub_field( 'post_full_width_image' ) ); ?>&description=<?php echo urlencode( the_sub_field( 'post_full_width_image_caption' ) ); ?>&hashtags=photography" target="_blank">Share on Pinterest</a>

										</div>

									</div>

									<figcaption>

										<?php the_sub_field( 'post_full_width_image_caption' ); ?>

									</figcaption>

								</figure>

							</div>

						</div>

					<?php elseif ( get_row_layout() == 'post_matrix_recipe' ) : ?>

						<?php

							$post_object = get_sub_field( 'post_recipe' );

						?>

						<?php if ( $post_object ) { ?>

							<?php

								$post = $post_object;

								setup_postdata( $post );

							?>

							<div class="matrix-recipe">

								<div class="entry-type">Recipe</div>

								<div class="recipe-title">

									<h2><?php the_title(); ?></h2>

								</div>

								<?php if ( have_rows( 'recipe_layout' ) ) : ?>

									<?php while ( have_rows( 'recipe_layout' ) ) : the_row(); ?>

										<?php if ( get_row_layout() == 'recipe_matrix_subhead' ) : ?>

											<div class="subhead">

												<h3><?php the_sub_field( 'recipe_subhead_title' ); ?></h3>

											</div>

										<?php elseif ( get_row_layout() == 'recipe_matrix_ingredients' ) : ?>

											<div class="ingredients">

												<?php if ( have_rows( 'recipe_ingredients' ) ): ?>

													<ul>

														<?php while ( have_rows( 'recipe_ingredients' ) ) : the_row(); ?>

															<?php

																// Variables...

																$ingredient = get_sub_field( 'recipe_ingredient' );

															?>

															<li><?php echo $ingredient; ?></li>

														<?php endwhile; ?>

													</ul>

												<?php endif; ?>

											</div>

										<?php elseif ( get_row_layout() == 'recipe_matrix_directions' ) : ?>

											<div class="directions">

												<?php if ( have_rows( 'recipe_directions' ) ): ?>

													<ol>

														<?php while ( have_rows( 'recipe_directions' ) ) : the_row(); ?>

															<?php

																// Variables...

																$direction = get_sub_field( 'recipe_direction' );

															?>

															<li><?php echo $direction; ?></li>

														<?php endwhile; ?>

													</ol>

												<?php endif; ?>

											</div>

										<?php elseif ( get_row_layout() == 'recipe_matrix_note' ) : ?>

											<div class="note">

												<p><?php the_sub_field( 'recipe_note' ); ?></p>

											</div>

										<?php endif; ?>

									<?php endwhile; ?>

								<?php else : ?>

									<p>No layouts found</p>

								<?php endif; ?>

							</div>

							<?php wp_reset_postdata(); ?>

						<?php } ?>

					<?php elseif ( get_row_layout() == 'post_matrix_images' ) : ?>

						<?php if ( have_rows( 'post_images' ) ) : ?>

							<div class="matrix-images">

								<?php while ( have_rows( 'post_images' ) ) : the_row(); ?>

									<div class="image <?php if ( get_sub_field( 'post_caption' ) ) { ?>with-caption<?php } ?>">

										<?php if ( get_sub_field( 'post_caption' ) ) { ?>

											<figure>

										<?php } ?>

											<div class="share-wrap">

												<img src="<?php the_sub_field( 'post_image' ); ?>" alt="<?php the_sub_field( 'post_description' ); ?>" />

												<div class="share">

													<a href="https://www.pinterest.com/pin/create/button/?url=<?php echo urlencode( get_the_permalink() ); ?>&media=<?php echo urlencode( the_sub_field( 'post_image' ) ); ?>&description=<?php echo urlencode( the_sub_field( 'post_caption' ) ); ?>&hashtags=photography" target="_blank">Share on Pinterest</a>

												</div>

											</div>

											<?php if ( get_sub_field( 'post_caption' ) ) { ?>

												<figcaption>

													<?php the_sub_field( 'post_caption' ); ?>

												</figcaption>

											<?php } ?>

										<?php if ( get_sub_field( 'post_caption' ) ) { ?>

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

		<!-- Back to Blog -->

		<div class="back-to">

			<a href="/blog/">

				<span class="arrow">&larr;</span> Back to Blog Gallery

			</a>

		</div>

		<?php if ( comments_open() || get_comments_number() ) : ?>

			<?php comments_template(); ?>

		<?php endif; ?>

	</article>

<?php get_footer(); ?>
