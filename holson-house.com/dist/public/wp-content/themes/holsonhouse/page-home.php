<?php get_header(); ?>

	<?php

		/* Section */

	?>

	<div class="section">

		<h1><?php the_title(); ?></h1>

	</div>

	<?php

		/* Featured */

	?>

	<div class="featured">

		<!-- 01 Image with Overlay -->

		<div class="block block-01">

			<div class="block-item">

				<div class="block-image with-overlay">

					<?php

						$block_one_link = get_field( 'block_one_link' );

					?>

					<?php if ( $block_one_link ) : ?>

						<?php

							$post = $block_one_link;

							setup_postdata( $post );

						?>

						<a href="<?php the_permalink(); ?>">

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>

					<img src="<?php the_field( 'block_one_image' ); ?>" alt="<?php the_field( 'block_one_description' ); ?>" />

					<?php

						$block_one_headline = get_field( 'block_one_headline' );

					?>

					<!-- Custom Headline -->

					<?php if ( $block_one_headline ) : ?>

						<?php if ( $block_one_link ) : ?>

							<?php

								$post = $block_one_link;

								setup_postdata( $post );

							?>

								<div class="overlay">

									<?php foreach ( ( get_the_category() ) as $block_one_category ) { ?>

										<div class="item-category"><?php echo $block_one_category->cat_name; ?></div>

									<?php } ?>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

						<div class="item-title"><?php the_field( 'block_one_headline' ); ?></div>

						<?php if ( $block_one_link ) : ?>

							<?php

								$post = $block_one_link;

								setup_postdata( $post );

							?>

									<div class="item-more">

										See More <span class="arrow">&rarr;</span>

									</div>

								</div>

							</a>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					<!-- Default -->

					<?php else : ?>

						<?php if ( $block_one_link ) : ?>

							<?php

								$post = $block_one_link;

								setup_postdata( $post );

							?>

								<div class="overlay">

									<?php foreach ( ( get_the_category() ) as $block_one_category ) { ?>

										<div class="item-category"><?php echo $block_one_category->cat_name; ?></div>

									<?php } ?>

									<div class="item-title"><?php the_title(); ?></div>

									<div class="item-more">

										See More <span class="arrow">&rarr;</span>

									</div>

								</div>

							</a>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					<?php endif; ?>

				</div>

			</div>

		</div>

		<!-- 02 Image -->

		<div class="block block-02">

			<div class="block-item">

				<div class="block-image">

					<img src="<?php the_field( 'block_two_image' ); ?>" alt="<?php the_field( 'block_two_description' ); ?>" />

				</div>

			</div>

		</div>

		<!-- 03 Text -->

		<div class="block block-03">

			<div class="block-item">

				<div class="block-text">

					<?php

						$block_three_link = get_field( 'block_three_link' );

					?>

					<?php if ( $block_three_link ) : ?>

						<?php

							$post = $block_three_link;

							setup_postdata( $post );

						?>

						<a href="<?php the_permalink(); ?>">

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>

					<?php

						$block_three_headline = get_field( 'block_three_headline' );

					?>

					<!-- Custom Headline -->

					<?php if ( $block_three_headline ) : ?>

						<?php if ( $block_three_link ) : ?>

							<?php

								$post = $block_three_link;

								setup_postdata( $post );

							?>

								<?php foreach ( ( get_the_category() ) as $block_three_category ) { ?>

									<div class="item-category"><?php echo $block_three_category->cat_name; ?></div>

								<?php } ?>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

						<div class="item-title"><?php the_field( 'block_three_headline' ); ?></div>

						<?php if ( $block_three_link ) : ?>

							<?php

								$post = $block_three_link;

								setup_postdata( $post );

							?>

								<div class="item-more">

									See More <span class="arrow">&rarr;</span>

								</div>

							</a>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					<!-- Default -->

					<?php else : ?>

						<?php if ( $block_three_link ) : ?>

							<?php

								$post = $block_three_link;

								setup_postdata( $post );

							?>

								<?php foreach ( ( get_the_category() ) as $block_three_category ) { ?>

									<div class="item-category"><?php echo $block_three_category->cat_name; ?></div>

								<?php } ?>

								<div class="item-title"><?php the_title(); ?></div>

								<div class="item-more">

									See More <span class="arrow">&rarr;</span>

								</div>

							</a>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					<?php endif; ?>

				</div>

			</div>

		</div>

		<!-- 04 Image -->

		<div class="block block-04">

			<div class="block-item">

				<div class="block-image">

					<img src="<?php the_field( 'block_four_image' ); ?>" alt="<?php the_field( 'block_four_description' ); ?>" />

				</div>

			</div>

		</div>

		<!-- 05 Image -->

		<div class="block block-05">

			<div class="block-item">

				<div class="block-image">

					<img src="<?php the_field( 'block_five_image' ); ?>" alt="<?php the_field( 'block_five_description' ); ?>" />

				</div>

			</div>

		</div>

		<!-- 06 Image with Overlay -->

		<div class="block block-06">

			<div class="block-item">

				<div class="block-image with-overlay">

					<?php

						$block_six_link = get_field( 'block_six_link' );

					?>

					<?php if ( $block_six_link ) : ?>

						<?php

							$post = $block_six_link;

							setup_postdata( $post );

						?>

						<a href="<?php the_permalink(); ?>">

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>

					<img src="<?php the_field( 'block_six_image' ); ?>" alt="<?php the_field( 'block_six_description' ); ?>" />

					<?php

						$block_six_headline = get_field( 'block_six_headline' );

					?>

					<!-- Custom Headline -->

					<!-- Custom Headline -->

					<?php if ( $block_six_headline ) : ?>

						<?php if ( $block_six_link ) : ?>

							<?php

								$post = $block_six_link;

								setup_postdata( $post );

							?>

								<div class="overlay">

									<?php foreach ( ( get_the_category() ) as $block_six_category ) { ?>

										<div class="item-category"><?php echo $block_six_category->cat_name; ?></div>

									<?php } ?>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

						<div class="item-title"><?php the_field( 'block_six_headline' ); ?></div>

						<?php if ( $block_six_link ) : ?>

							<?php

								$post = $block_six_link;

								setup_postdata( $post );

							?>

									<div class="item-more">

										See More <span class="arrow">&rarr;</span>

									</div>

								</div>

							</a>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					<!-- Default -->

					<?php else : ?>

						<?php if ( $block_six_link ) : ?>

							<?php

								$post = $block_six_link;

								setup_postdata( $post );

							?>

								<div class="overlay">

									<?php foreach ( ( get_the_category() ) as $block_six_category ) { ?>

										<div class="item-category"><?php echo $block_six_category->cat_name; ?></div>

									<?php } ?>

									<div class="item-title"><?php the_title(); ?></div>

									<div class="item-more">

										See More <span class="arrow">&rarr;</span>

									</div>

								</div>

							</a>

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					<?php endif; ?>

				</div>

			</div>

		</div>

		<!-- 07 Be Social -->

		<div class="block block-07">

			<div class="block-item">

				<div class="block-connect">

					<div class="item-category">Be Social</div>

					<div class="item-title">

						<span>Follow along</span> with @holsonhouse

					</div>

					<div class="connect">

						<ul>

							<?php if ( get_field( 'social_instagram', 'option' ) ) { ?>

								<li class="instagram">

									<a href="<?php the_field( 'social_instagram', 'option' ); ?>" rel="external">

										Instagram

									</a>

								</li>

							<?php } ?>

							<?php if ( get_field( 'social_twitter', 'option' ) ) { ?>

								<li class="twitter">

									<a href="<?php the_field( 'social_twitter', 'option' ); ?>" rel="external">

										Twitter

									</a>

								</li>

							<?php } ?>

							<?php if ( get_field( 'social_pinterest', 'option' ) ) { ?>

								<li class="pinterest">

									<a href="<?php the_field( 'social_pinterest', 'option' ); ?>" rel="external">

										Pinterest

									</a>

								</li>

							<?php } ?>

							<?php if ( get_field( 'social_facebook', 'option' ) ) { ?>

								<li class="facebook">

									<a href="<?php the_field( 'social_facebook', 'option' ); ?>" rel="external">

										Facebook

									</a>

								</li>

							<?php } ?>

							<li class="rss">

								<a href="<?php bloginfo( 'rss2_url' ); ?>">

									RSS

								</a>

							</li>

							<?php if ( get_field( 'social_blogger', 'option' ) ) { ?>

								<li class="blogger">

									<a href="<?php the_field( 'social_blogger', 'option' ); ?>" rel="external">

										Blogger

									</a>

								</li>

							<?php } ?>

							<?php if ( get_field( 'social_tumblr', 'option' ) ) { ?>

								<li class="tumblr">

									<a href="<?php the_field( 'social_tumblr', 'option' ); ?>" rel="external">

										Tumblr

									</a>

								</li>

							<?php } ?>

						</ul>

					</div>

				</div>

			</div>

		</div>

		<!-- 08 Image -->

		<div class="block block-08">

			<div class="block-item">

				<div class="block-image">

					<img src="<?php the_field( 'block_eight_image' ); ?>" alt="<?php the_field( 'block_eight_description' ); ?>" />

				</div>

			</div>

		</div>

		<!-- 09 Image -->

		<div class="block block-09">

			<div class="block-item">

				<div class="block-image">

					<img src="<?php the_field( 'block_nine_image' ); ?>" alt="<?php the_field( 'block_nine_description' ); ?>" />

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>