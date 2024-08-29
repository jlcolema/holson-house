<?php get_header(); ?>

	<?php

		/* Section */

	?>

	<div class="section">

		<h1><?php the_title(); ?></h1>

	</div>


	<?php

		/* Services */

	?>

	<div class="services">

		<ul>

			<?php

				$project_category_options = array(

					'taxonomy'		=> 'project_category',
					'orderby'		=> 'name',
					'order'			=> 'ASC',
					'hide_empty'	=> false,
					'exclude'		=> 1

				);

				$project_categories = get_categories( $project_category_options );

			?>

			<?php foreach ( $project_categories as $project_category ) : ?>

				<?php

					// Thumbnail

					$project_category_image = get_field( 'project_category_image', 'project_category_' . $project_category->cat_ID );

					// Link

					$project_category_link = get_term_link( $project_category );

				?>

				<li>

					<div class="thumbnail">

						<?php if ( $project_category_image ) : ?>

							<img src="<?php echo $project_category_image; ?>" alt="<?php echo $project_category->name; ?>" />

						<?php else : ?>

							<img src="<?php bloginfo( 'template_directory' ); ?>/m/portfolio/placeholder-project-category-image.jpg" alt="<?php echo $project_category->name; ?>" />

						<?php endif; ?>

					</div>

					<div class="title">

						<h2><?php echo $project_category->name; ?></h2>

					</div>

					<div class="description">

						<p><?php echo $project_category->description; ?></p>

					</div>

					<div class="more">

						<a href="<?php echo $project_category_link; ?>">View More</a>

					</div>

				</li>

			<?php endforeach; ?>

		</ul>

	</div>

<?php get_footer(); ?>