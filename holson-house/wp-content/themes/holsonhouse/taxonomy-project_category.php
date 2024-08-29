<?php get_header(); ?>

	<?php

		/* Section */

	?>

	<div class="section">

		<h1>Portfolio by Category</h1>

	</div>

	<?php

		/* Projects */

	?>

	<div class="projects new-projects for-events">

		<ul>

			<?php

				$portfolio_category = get_query_var( 'term' );

			?>

			<?php

				$project_listing_options = array(

					'post_type'		=> 'project',
					'post_status'	=> 'publish',
					'numberposts'	=> -1,
					'orderby'		=> 'menu_order',
					'order'			=> 'ASC',

					'tax_query'		=> array(

						array(

							'taxonomy'	=> 'project_category',
							'field'		=> 'slug',
							'terms'		=> $portfolio_category

						)

					)

				);

				$projects = get_posts( $project_listing_options );

			?>

			<?php foreach ( $projects as $project ) : ?>

				<?php

					/*-------------------------------------------
						Thumbnail
					-------------------------------------------*/

					// Notes...


					// Get the ID of the image...

					$project_thumbnail_id = get_field( 'project_thumbnail', $project->ID );


					// Define sizes to be used...

					$project_thumbnail_size_full = 'full';

					$project_thumbnail_size_large = 'project_thumbnail_size_large';

					// $project_thumbnail_size_medium = 'project_thumbnail_size_medium';

					// $project_thumbnail_size_small = 'project_thumbnail_size_small';


					// Set names for each image...

					$project_thumbnail_full = wp_get_attachment_image_src( $project_thumbnail_id, $project_thumbnail_size_full );

					$project_thumbnail_large = wp_get_attachment_image_src( $project_thumbnail_id, $project_thumbnail_size_large );

					// $project_thumbnail_medium = wp_get_attachment_image_src( $project_thumbnail_id, $project_thumbnail_size_medium );

					// $project_thumbnail_small = wp_get_attachment_image_src( $project_thumbnail_id, $project_thumbnail_size_small );


					/*-------------------------------------------
						Sample
					-------------------------------------------*/

					// Notes...


					// Attachment

					$project_sample_image_id = get_field( 'project_sample_image', $project->ID );

					// Sizes Available

					$project_sample_image_size_full = 'full';

					$project_sample_image_size_large = 'project_sample_image_size_large';

					// $project_sample_image_size_medium = 'project_sample_image_size_medium';

					// $project_sample_image_size_small = 'project_sample_image_size_small';

					// Image

					// 1,800px

					$project_sample_image_full = wp_get_attachment_image_src( $project_sample_image_id, $project_sample_image_size_full );

					// 900px

					$project_sample_image_large = wp_get_attachment_image_src( $project_sample_image_id, $project_sample_image_size_large );

					// 600px

					// $project_sample_image_medium = wp_get_attachment_image_src( $project_sample_image_id, $project_sample_image_size_medium );

					// 400px

					// $project_sample_image_small = wp_get_attachment_image_src( $project_sample_image_id, $project_sample_image_size_small );








					// Thumbnail Sizes

					// $attachment_id = get_field('industry_thumbnail', $item->ID);

					// $category_thumbnail_image_id = get_field( 'category_thumbnail_image', $service->ID );

					// Size Options

					// $category_thumbnail_image_size_full = "full";

					// $full = "full";

					// Thumbnail Sizes

					// $category_thumbnail_image_full = wp_get_attachment_image_src( $category_thumbnail_image_id, $category_thumbnail_image_size_full );

					// $industry_thumbnail_full = wp_get_attachment_image_src( $attachment_id, $full );

					$project_team = get_field( 'project_team', $project->ID );

				?>

				<li>

					<a href="#project-<?php echo $project->ID; ?>" class="project">

						<?php if ( $project_thumbnail_large ) { ?>

							<img src="<?php echo $project_thumbnail_large[0]; ?>" alt="<?php echo $project->post_title; ?>" />

						<?php } else { ?>

							<img src="<?php bloginfo( 'template_directory' ); ?>/m/portfolio/project-thumbnail.jpg" alt="<?php echo $project->post_title; ?>" />

						<?php } ?>

						<div style="display: none;">

							<div id="project-<?php echo $project->ID; ?>" class="project-details">

								<div class="sample">

									<?php if ( $project_sample_image_large ) { ?>

										<img src="<?php echo $project_sample_image_large[0]; ?>" alt="<?php echo $project->post_title; ?>" />

									<?php } else { ?>

										<img src="<?php bloginfo( 'template_directory' ); ?>/m/portfolio/project-sample.jpg" alt="<?php echo $project->post_title; ?>" />

									<?php } ?>

								</div>

								<?php if ( $project_team ): ?>

									<div class="meta">

										<div class="title">

											<h2><?php echo $project->post_title; ?></h2>

										</div>

										<div class="listing">

											<ul>

												<?php foreach ( $project_team as $post ): // variable must be called $post (IMPORTANT) ?>

													<?php setup_postdata( $post ); ?>

													<li>

														<div class="">Title of Role</div>

														<h3><?php the_title(); ?></h3>

													</li>

												<?php endforeach; ?>

											</ul>

										</div>

									</div>

									<?php wp_reset_postdata(); ?>

								<?php endif; ?>

							</div>

						</div>

					</a>

				</li>

			<?php endforeach; ?>

		</ul>

	</div>

<?php get_footer(); ?>