<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php do_action( 'avada_after_main_content' ); ?>

			</div>  <!-- #main -->

			<div class="social-footer">
				<a target="_blank" href="#"><svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><path d="M18.816 26.667v-7.292h3.158l.526-3.125h-3.684v-1.563c0-1.04.527-1.562 1.58-1.562h1.578V10h-2.632c-2.63 0-3.684 1.563-3.684 4.167v2.083H12.5v3.125h3.158v7.292h3.158z" fill-rule="nonzero" fill="#FFF"/><circle stroke="#FFF" stroke-width="1.5" cx="18" cy="18" r="18"/></g></svg></a>

				<a target="_blank" href="#"><svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg"><g transform="translate(1 1)" fill="none" fill-rule="evenodd"><g fill="#FFF"><path d="M18 9c-2.444 0-2.75.01-3.71.054s-1.613.196-2.185.42c-.6.225-1.145.58-1.594 1.037-.457.45-.812.994-1.038 1.595-.222.572-.374 1.226-.418 2.184C9.01 15.25 9 15.555 9 18s.01 2.75.054 3.71.196 1.613.42 2.185c.225.6.58 1.145 1.037 1.594.45.457.994.81 1.595 1.037.572.223 1.227.375 2.184.42.96.043 1.266.053 3.71.053s2.75-.01 3.71-.054 1.613-.196 2.185-.42c1.21-.466 2.165-1.422 2.632-2.63.223-.573.375-1.227.42-2.185.043-.96.053-1.266.053-3.71s-.01-2.75-.054-3.71-.196-1.613-.42-2.185c-.225-.6-.58-1.145-1.037-1.594-.45-.457-.994-.812-1.595-1.038-.572-.222-1.226-.374-2.184-.418C20.75 9.01 20.445 9 18 9zm0 1.622c2.403 0 2.688.01 3.637.052.877.04 1.354.187 1.67.31.392.144.745.374 1.036.673.3.29.53.644.673 1.035.123.317.27.794.31 1.67.043.95.052 1.235.052 3.638 0 2.403-.01 2.688-.052 3.637-.04.877-.187 1.354-.31 1.67-.303.786-.923 1.406-1.708 1.71-.317.122-.794.27-1.67.31-.95.042-1.235.052-3.638.052-2.403 0-2.688-.01-3.637-.054-.877-.04-1.354-.187-1.67-.31-.392-.144-.746-.374-1.036-.673-.3-.29-.53-.644-.673-1.035-.123-.317-.27-.794-.31-1.67-.043-.95-.052-1.235-.052-3.638 0-2.403.01-2.688.052-3.637.04-.877.187-1.354.31-1.67.144-.392.374-.745.673-1.036.29-.3.644-.53 1.035-.673.317-.123.794-.27 1.67-.31.95-.043 1.235-.052 3.638-.052z"/><path d="M18 20.92c-1.613 0-2.92-1.307-2.92-2.92s1.307-2.92 2.92-2.92 2.92 1.307 2.92 2.92-1.307 2.92-2.92 2.92m0-7.42c-2.485 0-4.5 2.015-4.5 4.5s2.015 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.015-4.5-4.5-4.5M22.5 11.7c.497 0 .9.403.9.9s-.403.9-.9.9-.9-.403-.9-.9.403-.9.9-.9"/></g><circle stroke="#FFF" stroke-width="1.5" cx="18" cy="18" r="18"/></g></svg></a>
			</div>

			<div id="back-to-top" class="wii-toTop">
				<p>BACK TO TOP</p>
			</div>

			<?php do_action( 'avada_after_main_container' ); ?>

			<?php global $social_icons; ?>

			<?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) : ?>
				</div>
			<?php endif; ?>

			<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->get_page_id();
			?>
						<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
							<?php $footer_parallax_class = ( 'footer_parallax_effect' == Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

							<div class="fusion-footer<?php echo $footer_parallax_class; ?>">

								<?php
								/**
								 * Check if the footer widget area should be displayed.
								 */
								?>
								<?php if ( ( Avada()->settings->get( 'footer_widgets' ) && 'no' != get_post_meta( $c_page_id, 'pyre_display_footer', true ) ) || ( ! Avada()->settings->get( 'footer_widgets' ) && 'yes' == get_post_meta( $c_page_id, 'pyre_display_footer', true ) ) ) : ?>
									<?php $footer_widget_area_center_class = ( Avada()->settings->get( 'footer_widgets_center_content' ) ) ? ' fusion-footer-widget-area-center' : ''; ?>

									<footer class="fusion-footer-widget-area fusion-widget-area<?php echo $footer_widget_area_center_class; ?>">
										<div class="fusion-row">
											<div class="fusion-columns fusion-columns-<?php echo Avada()->settings->get( 'footer_widgets_columns' ); ?> fusion-widget-area">
												<?php
												/**
												 * Check the column width based on the amount of columns chosen in Theme Options.
												 */
												$column_width = ( '5' == Avada()->settings->get( 'footer_widgets_columns' ) ) ? 2 : 12 / Avada()->settings->get( 'footer_widgets_columns' );
												?>

												<?php
												/**
												 * Render as many widget columns as have been chosen in Theme Options.
												 */
												?>
												<?php for ( $i = 1; $i < 7; $i++ ) : ?>
													<?php if ( $i <= Avada()->settings->get( 'footer_widgets_columns' ) ) : ?>
														<div class="fusion-column<?php echo ( Avada()->settings->get( 'footer_widgets_columns' ) == $i ) ? ' fusion-column-last' : ''; ?> col-lg-<?php echo $column_width; ?> col-md-<?php echo $column_width; ?> col-sm-<?php echo $column_width; ?>">
															<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'avada-footer-widget-' . $i ) ) : ?>
																<?php
																/**
																 * All is good, dynamic_sidebar() already called the rendering.
																 */
																?>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												<?php endfor; ?>

												<div class="fusion-clearfix"></div>
											</div> <!-- fusion-columns -->
										</div> <!-- fusion-row -->
									</footer> <!-- fusion-footer-widget-area -->
								<?php endif; // End footer wigets check. ?>

								<?php
								/**
								 * Check if the footer copyright area should be displayed.
								 */
								?>
								<?php if ( ( Avada()->settings->get( 'footer_copyright' ) && 'no' != get_post_meta( $c_page_id, 'pyre_display_copyright', true ) ) || ( ! Avada()->settings->get( 'footer_copyright' ) && 'yes' == get_post_meta( $c_page_id, 'pyre_display_copyright', true ) ) ) : ?>
									<?php $footer_copyright_center_class = ( Avada()->settings->get( 'footer_copyright_center_content' ) ) ? ' fusion-footer-copyright-center' : ''; ?>

									<footer id="footer" class="fusion-footer-copyright-area<?php echo $footer_copyright_center_class; ?>">
										<div class="fusion-row">
											<div class="fusion-copyright-content">

												<?php
												/**
												 * Footer Content (Copyright area) avada_footer_copyright_content hook.
												 *
												 * @hooked avada_render_footer_copyright_notice - 10 (outputs the HTML for the Theme Options footer copyright text)
												 * @hooked avada_render_footer_social_icons - 15 (outputs the HTML for the footer social icons)..
												 */
												do_action( 'avada_footer_copyright_content' );
												?>

											</div> <!-- fusion-fusion-copyright-content -->

											<div class="wii-copy">
												<p>site by <a target="_blank" href="http://what.it.is/">what.it.is</a></p>
											</div>
										</div> <!-- fusion-row -->
									</footer> <!-- #footer -->
								<?php endif; // End footer copyright area check. ?>
							</div> <!-- fusion-footer -->
						<?php endif; // End is not blank page check. ?>
					</div> <!-- wrapper -->

					<?php
					/**
					 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
					 */
					?>
					<?php if ( ( ( 'Boxed' == Avada()->settings->get( 'layout' ) && 'default' == get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) ) || 'boxed' == get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) ) && 'Top' != Avada()->settings->get( 'header_position' ) ) : ?>
						</div> <!-- #boxed-wrapper -->
					<?php endif; ?>

					<a class="fusion-one-page-text-link fusion-page-load-link"></a>

					<!-- W3TC-include-js-head -->

					<!-- Wii loaded js -->

					<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.swipebox.min.js"></script>

					<script type="text/javascript">
						jQuery(document).ready(function ($) {
							( function($) {

								$( '.swipebox' ).swipebox( {
									useCSS : true, // false will force the use of jQuery for animations
									useSVG : false, // false to force the use of png for buttons

								    afterOpen: function () {
								    	$('#swipebox-overlay').fadeIn(350);
								    },

								    afterMedia: function () {
								            setTimeout(function () {
										        $('.swipebox-video-container').addClass('active');
									    }, 800);

								            setTimeout(function () {
										        $('.slide').addClass('active');
									    }, 200);
								    },

								    // afterClose: function () {
								    //         setTimeout(function () {
										  //       $('.swipebox-video-container').removeClass('active');
										  //       $('.slide').removeClass('active');
									   //  }, 500);
								    //     $('#swipebox-overlay').fadeOut(300);
								    // },

								} );


							} )( jQuery );

						});

					</script>


					<?php wp_footer(); ?>

					<?php
					/**
					 * Echo the scripts added to the "before </body>" field in Theme Options
					 */
					echo Avada()->settings->get( 'space_body' );
					?>
				</body>
			</html>
