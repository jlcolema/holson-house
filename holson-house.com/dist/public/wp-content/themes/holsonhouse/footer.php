		</div>

	</main>

	<footer id="footer" role="contentinfo">

		<div class="wrap">

			<div class="inner-wrap">

				<div class="sub-section">

					<div class="inner-sub-section">

						<!-- Elsewhere -->

						<div class="block elsewhere">

							<div class="title">

								<h3>Elsewhere</h3>

							</div>

							<div class="container">

								<div class="other">

									<?php if ( have_rows( 'elsewhere_sites', 'option' ) ) : ?>

										<ul>

											<?php while ( have_rows( 'elsewhere_sites', 'option' ) ) : the_row();

												$elsewhere_name = get_sub_field( 'elsewhere_name', 'option' );
												$elsewhere_url = get_sub_field( 'elsewhere_url', 'option' );

											?>

												<li>

													<?php if ( $elsewhere_url ) : ?>

														<a href="<?php echo $elsewhere_url; ?>" rel="external">

													<?php endif; ?>

														<?php echo $elsewhere_name; ?>

													<?php if ( $elsewhere_url ) : ?>

														</a>

													<?php endif; ?>

												</li>

											<?php endwhile; ?>

										</ul>

									<?php endif; ?>

								</div>

							</div>

						</div>

						<!-- Contact -->

						<div class="block contact">

							<div class="title">

								<h3>Contact</h3>

							</div>

							<div class="container">

								<?php if ( get_field( 'contact_email', 'option' ) ) { ?>

									<div class="email">

										<a href="mailto:<?php the_field( 'contact_email', 'option' ); ?>"><?php the_field( 'contact_email', 'option' ); ?></a>

									</div>

								<?php } ?>

							</div>

						</div>

					</div>

					<div class="inner-sub-section">

						<!-- Be Social -->

						<div class="block be-social">

							<div class="title">

								<h3>Be Social</h3>

							</div>

							<div class="container">

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

										<?php if ( get_field( 'social_tumblr', 'option' ) ) { ?>

											<li class="tumblr">

												<a href="<?php the_field( 'social_tumblr', 'option' ); ?>" rel="external">

													Tumblr

												</a>

											</li>

										<?php } ?>

										<li class="rss">

											<a href="<?php bloginfo( 'rss2_url' ); ?>">

												RSS

											</a>

										</li>

									</ul>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="sub-section">

					<div class="inner-sub-section">

						<!-- Newsletter -->

						<div class="block newsletter-sign-up">

							<div class="title">

								<h3>Newsletter</h3>

							</div>

							<div class="container">

								<div class="newsletter-form">

									<div id="mc_embed_signup">

										<form action="//bloomdesign.us2.list-manage.com/subscribe/post?u=eb03cf14225912c824c30c1a4&amp;id=a72e40e3b4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

											<div id="mc_embed_signup_scroll">

												<div class="mc-field-group">

													<label for="mce-EMAIL">Email Address</label>

													<input type="email" value="" placeholder="Email then Press Enter" name="EMAIL" class="required email" id="mce-EMAIL" />

												</div>

												<div id="mce-responses" class="clear">

													<div class="response" id="mce-error-response" style="display: none;"></div>

													<div class="response" id="mce-success-response" style="display: none;"></div>

												</div>

												<?php

													/* Real people should not fill this in and expect good things -- do not remove this or risk form bot signups. */

												?>

												<div style="position: absolute; left: -5000px;">

													<input type="text" name="b_eb03cf14225912c824c30c1a4_a72e40e3b4" tabindex="-1" value="" />

												</div>

												<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" />

											</div>

										</form>

									</div>

									<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>

									<script type="text/javascript">

										(function($) {

											window.fnames = new Array();

											window.ftypes = new Array();

											fnames[0]="EMAIL";

											ftypes[0]="email";

											fnames[1]="FNAME";

											ftypes[1]="text";

											fnames[2]="LNAME";

											ftypes[2]="text";

										}(jQuery));

										var $mcj = jQuery.noConflict(true);

									</script>

								</div>

							</div>

						</div>

					</div>

					<div class="inner-sub-section">

						<!-- Search -->

						<div class="block search">

							<div class="title">

								<h3>Search</h3>

							</div>

							<div class="container">

								<div class="search-form">

									<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

										<div class="search-form-wrap">

											<label for="s" class="screen-reader-text">Search</label>

											<input type="text" id="s" name="s" value="" />

											<input type="submit" value="<?php _e( 'Search', 'bloom' ); ?>" id="searchsubmit" />

										</div>

									</form>

								</div>

							</div>

						</div>

						<!-- Copyright -->

						<div class="block copyright">

							<div class="title">

								<h3>Copyright</h3>

							</div>

							<div class="container">

								<p id="copyright">&copy; <?php echo date( 'Y' ); echo ' '; bloginfo( 'name' ); ?>. All rights reserved.</p>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>

</html>
