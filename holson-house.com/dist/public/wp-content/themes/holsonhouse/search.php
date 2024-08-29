<?php get_header(); ?>

	<?php

		/* Section */

	?>

	<div class="section">

		<h1>Search Results for: <?php printf( get_search_query() ); ?></h1>

	</div>

	<?php

		/* Articles */

	?>

	<div class="by-results">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article class="summary">

				<div class="thumbnail">

					<a href="<?php the_permalink(); ?>">

						<?php if ( get_field( 'post_thumbnail' ) ) { ?>

							<img srcset="<?php the_field( 'post_thumbnail' ); ?>" alt="<?php the_title(); ?>" />

						<?php } else { ?>

							<img srcset="<?php bloginfo( 'template_directory' ); ?>/m/article/placeholder-article-thumbnail.jpg" alt="<?php the_title(); ?>" />

						<?php } ?>

					</a>

				</div>

				<header class="">

					<h1>

						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

					</h1>

				</header>

				<footer class="meta">

					<time datetime="<?php echo date( DATE_W3C ); ?>" pubdate class="updated"><?php the_time( 'F jS, Y' ); ?></time>

				</footer>

			</article>

		<?php endwhile; ?>

		<div class="gap"></div>

		<div class="gap"></div>

		<!-- Post Navigation -->

		<?php else : ?>

			<p>No results found.</p>

		<?php endif; ?>

	</div>

	<?php

		/* Navigation */

	?>

	<?php get_template_part( 'inc/navigation' ); ?>

<?php get_footer(); ?>
