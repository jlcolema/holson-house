<?php get_header(); ?>

	<?php

		/* Section */

	?>

	<div class="section">

		<h1><?php single_post_title(); ?></h1>

	</div>

	<?php

		/* Articles */

	?>

	<div class="articles">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article class="summary">

				<div class="article-category">

					<?php the_category( ', ' ); ?>

				</div>

				<header class="title">

					<h1>

						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

					</h1>

				</header>

				<footer class="meta">

					<time datetime="<?php echo date( DATE_W3C ); ?>" pubdate class="updated"><?php the_time( 'F jS, Y' ); ?></time>

				</footer>

				<?php if ( have_rows( 'featured_type' ) ) : ?>

					<?php while ( have_rows( 'featured_type' ) ) : the_row(); ?>

						<?php if ( get_row_layout() == 'featured_type_full_width_image' ) : ?>

							<div class="full-width-image">

								<div class="image">

									<img src="<?php the_sub_field( 'featured_type_image' ); ?>" />

								</div>

							</div>

						<?php elseif ( get_row_layout() == 'featured_type_image_group' ) : ?>

							<div class="group-of-three-images">

								<div class="image">

									<img src="<?php the_sub_field( 'featured_type_left_image' ); ?>" />

								</div>

								<div class="image">

									<img src="<?php the_sub_field( 'featured_type_middle_image' ); ?>" />

								</div>

								<div class="image">

									<img src="<?php the_sub_field( 'featured_type_right_image' ); ?>" />

								</div>

							</div>

						<?php endif; ?>

					<?php endwhile; ?>

				<?php else : ?>

					<!-- Fallback Featured -->

					<div class="group-of-three-images">

						<div class="image">

							<img src="<?php bloginfo( 'template_directory' ); ?>/m/article/placeholder-article-summary-group-of-three-images-left.jpg" alt="Description of image." />

						</div>

						<div class="image">

							<img src="<?php bloginfo( 'template_directory' ); ?>/m/article/placeholder-article-summary-group-of-three-images-middle.jpg" alt="Description of image." />

						</div>

						<div class="image">

							<img src="<?php bloginfo( 'template_directory' ); ?>/m/article/placeholder-article-summary-group-of-three-images-right.jpg" alt="Description of image." />

						</div>

					</div>

				<?php endif; ?>

				<div class="more">

					<a href="<?php the_permalink(); ?>">

						Read More <span class="arrow">&rarr;</span>

					</a>

				</div>

			</article>

		<?php endwhile; ?>

		<?php else : ?>

			<p>No articles to display.</p>

		<?php endif; ?>

	</div>

	<?php

		/* Categories */

	?>

	<div class="categories">

		<div class="title">

			<h2>

				<span>Explore</span> by Category

			</h2>

		</div>

		<div class="listing">

			<div class="owl-carousel">

				<?php

					$post_category_list_options = array(

						'orderby'		=> 'name',
						'order'			=> 'ASC',
						'hide_empty'	=> false,
						'exclude'		=> 1

					);

					$post_categories = get_categories( $post_category_list_options );

				?>

				<?php foreach ( $post_categories as $post_category ) : ?>

					<?php

						// Thumbnail

						$post_category_thumbnail = get_field( 'post_category_thumbnail', 'category_' . $post_category->cat_ID );

					?>

					<div class="item">

						<a href="<?php echo get_category_link( $post_category->term_id ); ?>">

							<img src="<?php echo $post_category_thumbnail; ?>" alt="<?php echo $post_category->name; ?>" />

							<div class="overlay">

								<h3><?php echo $post_category->name; ?></h3>

							</div>

						</a>

					</div>

				<?php endforeach; ?>

			</div>

		</div>

	</div>

	<?php

		/* Navigation */

	?>

	<?php get_template_part( 'inc/navigation' ); ?>

<?php get_footer(); ?>