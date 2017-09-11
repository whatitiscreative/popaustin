<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<?php global $woocommerce; ?>
<html class="<?php echo ( Avada()->settings->get( 'smooth_scrolling' ) ) ? 'no-overflow-y' : ''; ?>" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<?php $is_ipad = (bool) ( isset( $_SERVER['HTTP_USER_AGENT'] ) && false !== strpos( $_SERVER['HTTP_USER_AGENT'],'iPad' ) ); ?>

	<?php
	$viewport = '';
	if ( Avada()->settings->get( 'responsive' ) && $is_ipad ) {
		$viewport .= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />';
	} elseif ( Avada()->settings->get( 'responsive' ) ) {
		if ( Avada()->settings->get( 'mobile_zoom' ) ) {
			$viewport .= '<meta name="viewport" content="width=device-width, initial-scale=1" />';
		} else {
			$viewport .= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />';
		}
	}

	$viewport = apply_filters( 'avada_viewport_meta', $viewport );
	echo $viewport;
	?>

	<?php wp_head(); ?>

	<?php

	$object_id = get_queried_object_id();
	$c_page_id  = Avada()->get_page_id();
	?>

	<script type="text/javascript">
		var doc = document.documentElement;
		doc.setAttribute('data-useragent', navigator.userAgent);
	</script>

	<?php echo Avada()->settings->get( 'google_analytics' ); ?>
	<?php echo Avada()->settings->get( 'space_head' ); ?>

	<!-- What it is overrides -->
	<!-- Load new stylesheet -->
	<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/new-styles.css">-->


	<style type="text/css">

		@font-face {
			font-family: 'Maison-Neue-Medium';
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Medium.eot');
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Medium.eot?#iefix') format('embedded-opentype'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Medium.woff') format('woff'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Medium.ttf') format('truetype');
			font-weight: 500;
			font-style: normal;
		}

		@font-face {
			font-family: 'Maison-Neue-Demi';
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Demi.eot');
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Demi.eot?#iefix') format('embedded-opentype'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Demi.woff') format('woff'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Demi.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}

		@font-face {
			font-family: 'Maison-Neue-Book';
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Book.eot');
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Book.eot?#iefix') format('embedded-opentype'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Book.woff') format('woff'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Book.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}

		@font-face {
			font-family: 'Maison-Neue-Light';
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Light.eot');
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Light.eot?#iefix') format('embedded-opentype'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Light.woff') format('woff'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Light.ttf') format('truetype');
			font-weight: 300;
			font-style: normal;
		}

		@font-face {
			font-family: 'Maison-Neue-Bold';
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Bold.eot');
			src: url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Bold.eot?#iefix') format('embedded-opentype'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Bold.woff') format('woff'),
				url('/staging/wp-content/themes/Avada/assets/fonts/Maison/MaisonNeue-Bold.ttf') format('truetype');
			font-weight: bold;
			font-style: normal;
		}
			body {
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				position: relative;
				font-family: 'Maison-Neue-Medium';
			}

			.fusion-row {
				max-width: 1100px;
			}


			.fusion-header-v2 .fusion-header, .fusion-header-v3 .fusion-header, .fusion-header-v4 .fusion-header, .fusion-header-v5 .fusion-header {
				border-bottom: 0 !important;
			}

			#main {
				padding-top: 0 !important;
			}

			.avada-skin-rev {
				border-top: 0 !important;
			}

			#menu-main-menu .button-default {
			    padding-right: 42px;
			    padding-top: 11px;
			    /*padding-top: 13px;*/
			    padding-bottom: 13px;
			}

			#menu-main-menu .button-default:after {
				content: '\002192';
				position: absolute;
			    top: 0.7rem;
			    /*top: 0.845rem;*/
			    right: 19px;
			}

			.menu-text {
				letter-spacing: 1px;	
				font-size: 13px;
				text-transform: uppercase;
			}

			.fusion-icon-bars:before {
			    position: absolute;
			    top: -50px;
			}

			.fusion-layout-column.fusion-column-last {
			    margin-left: 0;
			    margin-right: 0;
			    margin-top: 0 !important;
			}

			.fusion-logo img {
			    width: 224px !important;
			}

			@media only screen and (max-width: 1024px) {
				#side-header .fusion-mobile-logo-1 .fusion-mobile-logo-1x, .fusion-mobile-logo-1 .fusion-mobile-logo-1x {
				    width: 200px !important;
				}
			}

			@media only screen and (min-width: 1025px) {
				#menu-main-menu .button-default {
					text-transform: initial;
				}
			}

			.fusion-mobile-nav-item a:hover span {
			    color: #d41362;
			}

			/* Wii Banner Updates */
			.intro-banner {
				text-align: center;
				/*padding: 175px 0 55px;*/
				padding: 60px 0 0 0;
			    max-width: 700px;
			    margin: 0 auto;
			}

			.video-banner {
				padding: 80px 0 60px 0;
				max-width: 600px;
			}

			.intro-banner h1, .intro-banner p {
				color: #FFFFFF;
			    font-weight: 500;
			    font-family: 'Maison-Neue-Medium';
			}

			.intro-banner h1 {
				font-size: 46px;
				line-height: 60px;
				/*letter-spacing: 4px;*/
				margin-bottom: 25px;
			}

			.intro-banner p {
				font-size: 19px;
			}

			/* Button Row */

			.intro-banner.partners {
				display: none;
			}

			.page-id-517 .intro-banner.partners {
				display: block;
			}

			.page-id-517 .intro-banner.home {
				display: none;
			}


			.page-templates-videos .intro-banner {
				display: block;
			}

			.page-template-home .intro-banner {
				display: block;
			}

			.video-banner {
				display: block !important;
			}

			.page-id-517 .button-row.partners {
				display: block;
			}

			.button-row.home {
				display: block;
			}

			.button-row .button {
				border: 2px solid #FFFFFF;
				background: #000000;
				display: inline-block;
		        width: 183px;
			    height: 60px;
			    margin: 20px 10px;
			    font-size: 16px;
			    line-height: 57px;
			    text-align: left;
			    padding-left: 30px;
			    border-radius: 30px;
			    position: relative;
			    cursor: pointer;
			}

			.button-row.partners .button {
				width: 240px;
			}

			.button-row .button:hover {
				border: 2px solid #d43162;
				background: #d43162;
				color: #FFFFFF;
			}


			.button-row .button-default:after {
				content: '';
				background: url('http://popaustin.com/staging/wp-content/uploads/2017/08/pop-arrow.png');
			    background-size: cover;
			    position: absolute;
			    top: 21px;
			    right: 25px;
			    font-size: 13px;
			    width: 15px;
			    height: 13px;
			}

			/* Animation Sequence */
			.animation-sequence {
				height: 1512px;
				background: #efefef;
				margin-bottom: 60px;
				margin-right: -30px;
				margin-left: -60px;
				width: calc(100% + 90px);
			}

			/* Video Modal */

			.video-modal {
				margin-bottom: 20px;
				position: relative;
			}


			.cta-blocks {
				display: flex;
				flex-direction: column;
				margin-bottom: 140px;
			}

			@media screen and (max-width: 767px) {
				.cta-blocks {
					display: block;
				}
			}

			.cta-blocks .block {
				height: 440px;
				width: 100%;
				background: #FFFFFF;
			    flex: 0 0 100%;
			    display: flex;
			    flex-direction: column;
			    justify-content: center;
			    align-items: center;
			    color: #000000;
			    margin-bottom: 20px;
			}

			.cta-blocks .block h3 {
				font-size: 26px;
				line-height: 34px;
				letter-spacing: 2px;
			    font-family: 'Montserrat';
			    text-transform: uppercase;
		        max-width: 350px;
			    margin: 1em auto;
			    text-align: center;
			}

			@media screen and (max-width: 767px) {
				.cta-blocks .block {
					height: 300px;
				}

				.cta-blocks .block h3 {
				    max-width: 250px;
				}
			}


			.cta-blocks .button-sm {
				padding: 0 14px;
				min-width: 90px;
				border: 2px solid #ffffff;
				height: 40px;
				line-height: 37px;
				font-size: 13px;
				border-radius: 20px;
				position: relative;
			}

			.cta-blocks .button-sm svg {
				position: absolute;
				right: 16px;
				top: 13px;
			}

			.cta-blocks .button-sm:hover {
				color: #D41362;
				background: #ffffff;
				border: 2px solid #D41362;
			}

			.cta-blocks .button-sm:hover svg path {
				fill: #D41362;
			}

			.cta-blocks .button-sm.dark:hover svg path {
				fill: #ffffff;
			}

			.cta-blocks .button-sm.dark {
				border: 2px solid #000000;
				color: #000000;
				min-width: 100px;
			}

			.cta-blocks .button-sm.dark:hover {
				background: #000000;
				color: #ffffff;
			}

			.cta-blocks .block:first-child {
				margin-right: 20px;
				background: #D41362;
			}

			.cta-blocks .block:first-child h3 {
				color: #FFFFFF;
			}

			@media screen and (min-width: 992px) {
				.cta-blocks {
					display: flex;
					flex-direction: row;
				}

				.cta-blocks .block {
					flex: 1;
					margin-bottom: 0;
				}
			}

			/* Gallery grid */
			.gallery-grid .gallery-block {
				margin-bottom: 20px;
				width: 100%;
				text-align: center;
				position: relative;
				/*display: flex;
				flex-direction: column;*/
			}

			.gallery-grid .gallery-block p {
				color: #ffffff;
			}

			.gallery-grid .gallery-block a {
				display: block;
			}


			.gallery-block img {
				/*flex-shrink: 0;
				min-width: 100%;
				min-height: 100%*/

			}

			.gallery-block .play-icon {
				position: absolute;
				right: 0;
				left: 0;
			    top: calc(50% - 40px);
			}

			.gallery-block:hover svg circle {
				fill: #D41362;
			}

			.photo-caption {
				display: inline-block;
			    text-transform: uppercase;
			    letter-spacing: 1px;
			    font-size: 13px;
			    margin-bottom: 0;
			}

			.gallery-grid .grid-row {
				display: flex;
				flex-direction: column;
			}

			@media screen and (min-width: 992px) {
				.gallery-grid .grid-row {
				    flex-direction: row;
				    display: -webkit-box;
				    display: -webkit-flex;
				    display: flex;
				    -webkit-flex-wrap: wrap;
				    flex-wrap: wrap;
				}
			}

			@media screen and (min-width: 992px) and (max-width: 1198px){
				.gallery-grid .gallery-block {
					width: 48%;
					margin-right: 10px;
				}

				.gallery-grid .gallery-block:nth-child(even) {
					margin-right: 0;
				}
			}


			@media screen and (min-width: 1199px) {
				.gallery-grid .gallery-block {
					width: 32%;
					margin-right: 20px;
				}

				.gallery-grid .gallery-block:nth-child(3n+3) {
					margin-right: 0;
				}
			}

			.gallery-grid h1 {
				font-size: 46px;
				line-height: 60px;
				color: #FFFFFF;
				display: block;
				text-align: center;
				margin-bottom: 72px;
				letter-spacing: 3px;
				text-transform: uppercase;
			}

			@media screen and (max-width: 767px) {
				.gallery-grid h1 {
					margin-bottom: 40px;
				}
			}

			/* Swipebox */

			/*! Swipebox v1.3.0 | Constantin Saguin csag.co | MIT License | github.com/brutaldesign/swipebox */
			html.swipebox-html.swipebox-touch {
			  overflow: hidden !important;
			}

			#swipebox-overlay img {
			  border: none !important;
			}

			#swipebox-overlay {
			  width: 100%;
			  height: 100%;
			  position: fixed;
			  top: 0;
			  left: 0;
			  z-index: 99999 !important;
			  overflow: hidden;
			  -webkit-user-select: none;
			     -moz-user-select: none;
			      -ms-user-select: none;
			          user-select: none;
			  display: none;
			}

			#swipebox-container {
			  position: relative;
			  width: 100%;
			  height: 100%;
			}

			#swipebox-slider {
			  -webkit-transition: -webkit-transform 0.4s ease;
			          transition: transform 0.4s ease;
			  height: 100%;
			  left: 0;
			  top: 0;
			  width: 100%;
			  white-space: nowrap;
			  position: absolute;
			  display: none;
			  cursor: pointer;
			}
			#swipebox-slider .slide {
			  height: 100%;
			  width: 100%;
			  line-height: 1px;
			  text-align: center;
			  display: inline-block;
			}
			#swipebox-slider .slide:before {
			  content: "";
			  display: inline-block;
			  height: 50%;
			  width: 1px;
			  margin-right: -1px;
			}
			#swipebox-slider .slide img,
			#swipebox-slider .slide .swipebox-video-container,
			#swipebox-slider .slide .swipebox-inline-container {
			  display: inline-block;
			  max-height: 100%;
			  max-width: 100%;
			  margin: 0;
			  padding: 0;
			  width: auto;
			  height: auto;
			  vertical-align: middle;
			}
			#swipebox-slider .slide .swipebox-video-container {
			  background: none;
			  max-width: 1140px;
			  max-height: 100%;
			  width: 100%;
			  padding: 5%;
			  -webkit-box-sizing: border-box;
			          box-sizing: border-box;
			}
			#swipebox-slider .slide .swipebox-video-container .swipebox-video {
			  width: 100%;
			  height: 0;
			  padding-bottom: 56.25%;
			  overflow: hidden;
			  position: relative;
			}
			#swipebox-slider .slide .swipebox-video-container .swipebox-video iframe {
			  width: 100% !important;
			  height: 100% !important;
			  position: absolute;
			  top: 0;
			  left: 0;
			}

			/* VIDEO CUSTOME */
			.swipebox-video-container, .slide img {
				opacity: 0;
				transform: translateY(50%);
				transition: all 0.4s ease-in-out;
			}

			#swipebox-slider .slide img {
				width: 80vw;
				height: auto;
			}

			.swipebox-video-container.active, .slide.active img {
				opacity: 1;
				transform: translateY(0);
				transition: all 0.4s ease-in-out;
			    -webkit-transition-delay: 0.8s; /* Safari */
			    transition-delay: .8s;

			}

			.slide.active img {
			    -webkit-transition-delay: 0.1s; /* Safari */
			    transition-delay: 0.1s;
			}

			#swipebox-slider .slide-loading {
			  background: url(../img/loader.gif) no-repeat center center;
			}

			#swipebox-bottom-bar,
			#swipebox-top-bar {
			  -webkit-transition: 0.5s;
			          transition: 0.5s;
			  position: absolute;
			  left: 0;
			  z-index: 999;
			  height: 50px;
			  width: 100%;
			}

			#swipebox-bottom-bar {
			  bottom: -50px;
			}
			#swipebox-bottom-bar.visible-bars {
			  -webkit-transform: translate3d(0, -50px, 0);
			          transform: translate3d(0, -50px, 0);
			}

			#swipebox-top-bar {
			  top: -50px;
			}
			#swipebox-top-bar.visible-bars {
			  -webkit-transform: translate3d(0, 50px, 0);
			          transform: translate3d(0, 50px, 0);
			}

			#swipebox-title {
			  display: block;
			  width: 100%;
			  text-align: center;
			}

			#swipebox-prev,
			#swipebox-next,
			#swipebox-close {
			  background-repeat: no-repeat;
			  border: none !important;
			  text-decoration: none !important;
			  cursor: pointer;
			  width: 50px;
			  height: 50px;
			  top: 0;
			}

			#swipebox-arrows {
			  display: block;
			  margin: 0 auto;
			  width: 100%;
			  height: 50px;
			}

			#swipebox-prev {
			  background-position: -32px 13px;
			  float: left;
			}

			#swipebox-next {
			  background-position: -78px 13px;
			  float: right;
			}

			#swipebox-close {
			  position: absolute;
			  z-index: 9999;
  			  background-image: url(http://popaustin.com/staging/wp-content/uploads/2017/09/close.png) !important;
			  background-repeat: no-repeat;
			  cursor: pointer;
		      width: 18px;
		      height: 18px;
	          background-size: 18px;
		      background-position: center center;
			  top: 5vh;
			  right: 5vh;
			}

			.swipebox-no-close-button #swipebox-close {
			  display: none;
			}

			#swipebox-prev.disabled,
			#swipebox-next.disabled {
			  opacity: 0.3;
			}

			.swipebox-no-touch #swipebox-overlay.rightSpring #swipebox-slider {
			  -webkit-animation: rightSpring 0.3s;
			          animation: rightSpring 0.3s;
			}
			.swipebox-no-touch #swipebox-overlay.leftSpring #swipebox-slider {
			  -webkit-animation: leftSpring 0.3s;
			          animation: leftSpring 0.3s;
			}

			.swipebox-touch #swipebox-container:before, .swipebox-touch #swipebox-container:after {
			  -webkit-backface-visibility: hidden;
			          backface-visibility: hidden;
			  -webkit-transition: all .3s ease;
			          transition: all .3s ease;
			  content: ' ';
			  position: absolute;
			  z-index: 999;
			  top: 0;
			  height: 100%;
			  width: 20px;
			  opacity: 0;
			}
			.swipebox-touch #swipebox-container:before {
			  left: 0;
			  -webkit-box-shadow: inset 10px 0px 10px -8px #656565;
			          box-shadow: inset 10px 0px 10px -8px #656565;
			}
			.swipebox-touch #swipebox-container:after {
			  right: 0;
			  -webkit-box-shadow: inset -10px 0px 10px -8px #656565;
			          box-shadow: inset -10px 0px 10px -8px #656565;
			}
			.swipebox-touch #swipebox-overlay.leftSpringTouch #swipebox-container:before {
			  opacity: 1;
			}
			.swipebox-touch #swipebox-overlay.rightSpringTouch #swipebox-container:after {
			  opacity: 1;
			}

			@-webkit-keyframes rightSpring {
			  0% {
			    left: 0;
			  }

			  50% {
			    left: -30px;
			  }

			  100% {
			    left: 0;
			  }
			}

			@keyframes rightSpring {
			  0% {
			    left: 0;
			  }

			  50% {
			    left: -30px;
			  }

			  100% {
			    left: 0;
			  }
			}
			@-webkit-keyframes leftSpring {
			  0% {
			    left: 0;
			  }

			  50% {
			    left: 30px;
			  }

			  100% {
			    left: 0;
			  }
			}
			@keyframes leftSpring {
			  0% {
			    left: 0;
			  }

			  50% {
			    left: 30px;
			  }

			  100% {
			    left: 0;
			  }
			}
			@media screen and (min-width: 800px) {
			  #swipebox-arrows {
			    width: 92%;
			    max-width: 800px;
			  }
			}
			/* Skin 
			--------------------------*/
			#swipebox-overlay {
				background: rgba(0, 0, 0, 0.75);
			}

			#swipebox-bottom-bar,
			#swipebox-top-bar {
			  text-shadow: 1px 1px 1px black;
			  background: #000;
			  opacity: 0.95;
			}

			#swipebox-top-bar {
			  color: white !important;
			  font-size: 15px;
			  line-height: 43px;
			  font-family: Helvetica, Arial, sans-serif;
			}

			/* Homepage Large Video Modal */

			.video-modal-icon {
				position: absolute;
				top: calc(693px / 2 - 40px);
				bottom: 0;
				right: 0;
				margin: 0 auto;
				left: 0;
				height: 120px;
				width: 120px;
				border: 1px solid #FFFFFF;
				border-radius: 50%;
			}

			@media screen and (max-width: 767px) {
				.video-modal-icon {
					top: calc(400px / 2 - 40px);
				}
			}

			.mobile-animation-sequence {
				background-image: url(http://popaustin.com/staging/wp-content/uploads/2017/09/cards-mobile-fallback.png);
				background-repeat: no-repeat;
				background-position: center;
				height: 400px;
				width: 100%;
				background-size: cover;
				display: block;
				margin: 100px 0 100px -30px;
				width: calc(100% + 60px);
			}

			.animation-sequence {
				display: none;
			}

			@media screen and (min-width: 768px) {
				.mobile-animation-sequence {
					display: none;
				}

				.animation-sequence {
					display: block;
				}
			}

			.video-modal-icon p {
				position: absolute;
				right: 0;
				bottom: 0;
				left: 0;
				margin: 0 auto;
				height: 100%;
			    top: 40px;
			    line-height: 20px;
				text-align: center;
				font-size: 16px;
				letter-spacing: 1px;
				color: #ffffff;
				cursor: pointer;
			}

			.video-modal-large {
				position: relative;
				height: 693px;
				width: 100%;
			}

			@media screen and (max-width: 767px) {
				.video-modal-large {
					height: 400px;
				}
			}

			.video-modal-large img {
				width: 1100px;
				height: auto;
				max-height: 693px;
			}

			/* Footer Updates */

			#main {
				padding-bottom: 0;
			}

			footer {
				position: relative;
				margin-top: 50px;
			}

			@media screen and (max-width: 767px) {
				footer {
					position: relative;
					margin-top: 25px;
				}
			}

			.wii-back-to-top {
				position: absolute;
				bottom: 0;
				width: 100px;
				height: 100px;
			}

			.fusion-footer-copyright-area {
				padding: 40px 0;
				background-color: #000000;
				border: 0;
			}

			.fusion-copyright-content {
				display: inline-block;
				width: 90%;
			}

			.fusion-copyright-notice {
				color: #ffffff;
				display: inline-block;
			}

			.wii-copy {
				font-size: 12px;
				color: #ffffff;
				display: inline-block;
			}

			.wii-copy p {
				margin: 0;
			}

			.wii-copy a {
				font-size: 12px;
				text-decoration: underline;
				color: #D41362;
			}

			#toTop {
				background-color: #D41362;
				 border-radius: 0; 
				bottom: 0;
				display: none;
				height: 98px;
				width: 380px;
				position: absolute;
				right: 0;
				left: 0;
				margin: 0 auto;
				text-align: center;
				text-transform: uppercase;
				opacity: 1;
				z-index: 10000;
				display: none;
			}

			#toTop:before {
				content: 'BACK TO TOP';
				font-size: 13px;
				font-family: inherit;
				top: 38px;
				position: relative;
			}

			.wii-toTop {
				background-color: #D41362;
				 border-radius: 0; 
				bottom: 0;
				display: none;
				height: 98px;
				width: 380px;
				position: absolute;
				right: 0;
				left: 0;
				margin: 0 auto;
				text-align: center;
				text-transform: uppercase;
				opacity: 1;
				z-index: 10000;
				display: none;
			}

			.wii-toTop p {
				content: 'BACK TO TOP';
				font-size: 13px;
				font-family: inherit;
				top: 40px;
				position: relative;
				color: #ffffff;
			}

			/*Homepage animation sequence */

			.animation-sequence {
			  background: #000000;
			  overflow: hidden;
			  position: relative;
			}

			.boy {
			  display: block;
			  position: absolute;
			  left: 0;
			  right: 0;
			  margin: 0 auto;
			}

			.animation-sequence .middle {
			  display: block;
			  margin: auto;
			  margin-top: 1512px
			}

			.animation-sequence .container {
			  width: 100%;
			  height: 100%;
			  position: absolute;
			}

			.joey {
			  background: url(http://popaustin.com/staging/wp-content/uploads/2017/09/artboard-1.png) no-repeat center center;
			  width: 95% !important;

			  height: 1512px !important;
			  z-index: 99;
			}

			.donnie {
			  background: url(http://popaustin.com/staging/wp-content/uploads/2017/09/artboard-3.png) no-repeat center center;
			  width: 95% !important;

			  height: 1512px !important;
			}

			.jesse {
			  background: url(http://popaustin.com/staging/wp-content/uploads/2017/09/artboard-2.png) no-repeat center center;
			  width: 95% !important;
			  height: 1512px !important;
			}

			.fusion-main-menu>ul>li>a, .side-nav li a {
				font-family: 'Maison-Neue-Medium' !important;
			}

			.social-footer {
				text-align: center;
				margin-top: 50px;
			}

			@media screen and (max-width: 767px) {
				.social-footer {
					text-align: center;
					margin-top: 25px;
				}
			}

			.social-footer a {
				margin: 0 12px;
			}

			.social-footer a:hover svg path {
				fill: #D41362;
			}

			.social-footer a:hover svg circle {
				stroke: #D41362;
			}

			@media screen and (max-width: 991px) {
				footer {
					text-align: center;
				}
			}

	</style>


</head>
<?php
$wrapper_class = '';


if ( is_page_template( 'blank.php' ) ) {
	$wrapper_class  = 'wrapper_blank';
}

if ( 'modern' == Avada()->settings->get( 'mobile_menu_design' ) ) {
	$mobile_logo_pos = strtolower( Avada()->settings->get( 'logo_alignment' ) );
	if ( 'center' == strtolower( Avada()->settings->get( 'logo_alignment' ) ) ) {
		$mobile_logo_pos = 'left';
	}
}

?>
<body <?php body_class(); ?>>
 	<?php do_action( 'avada_before_body_content' ); ?>
	<?php $boxed_side_header_right = false; ?>
	<?php if ( ( ( 'Boxed' == Avada()->settings->get( 'layout' ) && ( 'default' == get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) || '' == get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) ) ) || 'boxed' == get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) ) && 'Top' != Avada()->settings->get( 'header_position' ) ) : ?>
		<?php if ( Avada()->settings->get( 'slidingbar_widgets' ) && ! is_page_template( 'blank.php' ) && ( 'Right' == Avada()->settings->get( 'header_position' ) || 'Left' == Avada()->settings->get( 'header_position' ) ) ) : ?>
			<?php get_template_part( 'slidingbar' ); ?>
			<?php $boxed_side_header_right = true; ?>
		<?php endif; ?>
		<div id="boxed-wrapper">
	<?php endif; ?>
	<div id="wrapper" class="<?php echo $wrapper_class; ?>">
		<div id="home" style="position:relative;top:1px;"></div>
		<?php if ( Avada()->settings->get( 'slidingbar_widgets' ) && ! is_page_template( 'blank.php' ) && ! $boxed_side_header_right ) : ?>
			<?php get_template_part( 'slidingbar' ); ?>
		<?php endif; ?>
		<?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) : ?>
			<div class="above-footer-wrapper">
		<?php endif; ?>

		<?php avada_header_template( 'Below' ); ?>
		<?php if ( 'Left' == Avada()->settings->get( 'header_position' ) || 'Right' == Avada()->settings->get( 'header_position' ) ) : ?>
			<?php avada_side_header(); ?>
		<?php endif; ?>

		<div id="sliders-container">
			<?php
			if ( is_search() ) {
				$slider_page_id = '';
			} else {
				$slider_page_id = '';
				if ( ! is_home() && ! is_front_page() && ! is_archive() && isset( $object_id ) ) {
					$slider_page_id = $object_id;
				}
				if ( ! is_home() && is_front_page() && isset( $object_id ) ) {
					$slider_page_id = $object_id;
				}
				if ( is_home() && ! is_front_page() ) {
					$slider_page_id = get_option( 'page_for_posts' );
				}
				if ( class_exists( 'WooCommerce' ) && is_shop() ) {
					$slider_page_id = get_option( 'woocommerce_shop_page_id' );
				}

				if ( ( 'publish' == get_post_status( $slider_page_id ) && ! post_password_required() ) || ( current_user_can( 'read_private_pages' ) && in_array( get_post_status( $slider_page_id ), array( 'private', 'draft', 'pending' ) ) ) ) {
					avada_slider( $slider_page_id );
				}
			} ?>
		</div>
		<?php if ( get_post_meta( $slider_page_id, 'pyre_fallback', true ) ) : ?>
			<div id="fallback-slide">
				<img src="<?php echo get_post_meta( $slider_page_id, 'pyre_fallback', true ); ?>" alt="" />
			</div>
		<?php endif; ?>
		<?php avada_header_template( 'Above' ); ?>

		<?php if ( has_action( 'avada_override_current_page_title_bar' ) ) : ?>
			<?php do_action( 'avada_override_current_page_title_bar', $c_page_id ); ?>
		<?php else : ?>
			<?php avada_current_page_title_bar( $c_page_id ); ?>
		<?php endif; ?>

		<?php if ( is_page_template( 'contact.php' ) && Avada()->settings->get( 'recaptcha_public' ) && Avada()->settings->get( 'recaptcha_private' ) ) : ?>
			<script type="text/javascript">var RecaptchaOptions = { theme : '<?php echo Avada()->settings->get( 'recaptcha_color_scheme' ); ?>' };</script>
		<?php endif; ?>

		<?php if ( is_page_template( 'contact.php' ) && Avada()->settings->get( 'gmap_address' ) && Avada()->settings->get( 'status_gmap' ) ) : ?>
			<?php
			$map_popup             = ( ! Avada()->settings->get( 'map_popup' ) )          ? 'yes' : 'no';
			$map_scrollwheel       = ( Avada()->settings->get( 'map_scrollwheel' ) )    ? 'yes' : 'no';
			$map_scale             = ( Avada()->settings->get( 'map_scale' ) )          ? 'yes' : 'no';
			$map_zoomcontrol       = ( Avada()->settings->get( 'map_zoomcontrol' ) )    ? 'yes' : 'no';
			$address_pin           = ( Avada()->settings->get( 'map_pin' ) )            ? 'yes' : 'no';
			$address_pin_animation = ( Avada()->settings->get( 'gmap_pin_animation' ) ) ? 'yes' : 'no';
			?>
			<div id="fusion-gmap-container">
				<?php echo Avada()->google_map->render_map( array(
					'address'                  => Avada()->settings->get( 'gmap_address' ),
					'type'                     => Avada()->settings->get( 'gmap_type' ),
					'address_pin'              => $address_pin,
					'animation'                => $address_pin_animation,
					'map_style'                => Avada()->settings->get( 'map_styling' ),
					'overlay_color'            => Avada()->settings->get( 'map_overlay_color' ),
					'infobox'                  => Avada()->settings->get( 'map_infobox_styling' ),
					'infobox_background_color' => Avada()->settings->get( 'map_infobox_bg_color' ),
					'infobox_text_color'       => Avada()->settings->get( 'map_infobox_text_color' ),
					'infobox_content'          => htmlentities( Avada()->settings->get( 'map_infobox_content' ) ),
					'icon'                     => Avada()->settings->get( 'map_custom_marker_icon' ),
					'width'                    => Avada()->settings->get( 'gmap_dimensions', 'width' ),
					'height'                   => Avada()->settings->get( 'gmap_dimensions', 'height' ),
					'zoom'                     => Avada()->settings->get( 'map_zoom_level' ),
					'scrollwheel'              => $map_scrollwheel,
					'scale'                    => $map_scale,
					'zoom_pancontrol'          => $map_zoomcontrol,
					'popup'                    => $map_popup,
				) ); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_page_template( 'contact-2.php' ) && Avada()->settings->get( 'gmap_address' ) && Avada()->settings->get( 'status_gmap' ) ) : ?>
			<?php
			$map_popup             = ( ! Avada()->settings->get( 'map_popup' ) )          ? 'yes' : 'no';
			$map_scrollwheel       = ( Avada()->settings->get( 'map_scrollwheel' ) )    ? 'yes' : 'no';
			$map_scale             = ( Avada()->settings->get( 'map_scale' ) )          ? 'yes' : 'no';
			$map_zoomcontrol       = ( Avada()->settings->get( 'map_zoomcontrol' ) )    ? 'yes' : 'no';
			$address_pin_animation = ( Avada()->settings->get( 'gmap_pin_animation' ) ) ? 'yes' : 'no';
			?>
			<div id="fusion-gmap-container">
				<?php echo Avada()->google_map->render_map( array(
					'address'                  => Avada()->settings->get( 'gmap_address' ),
					'type'                     => Avada()->settings->get( 'gmap_type' ),
					'map_style'                => Avada()->settings->get( 'map_styling' ),
					'animation'                => $address_pin_animation,
					'overlay_color'            => Avada()->settings->get( 'map_overlay_color' ),
					'infobox'                  => Avada()->settings->get( 'map_infobox_styling' ),
					'infobox_background_color' => Avada()->settings->get( 'map_infobox_bg_color' ),
					'infobox_text_color'       => Avada()->settings->get( 'map_infobox_text_color' ),
					'infobox_content'          => htmlentities( Avada()->settings->get( 'map_infobox_content' ) ),
					'icon'                     => Avada()->settings->get( 'map_custom_marker_icon' ),
					'width'                    => Avada()->settings->get( 'gmap_dimensions', 'width' ),
					'height'                   => Avada()->settings->get( 'gmap_dimensions', 'height' ),
					'zoom'                     => Avada()->settings->get( 'map_zoom_level' ),
					'scrollwheel'              => $map_scrollwheel,
					'scale'                    => $map_scale,
					'zoom_pancontrol'          => $map_zoomcontrol,
					'popup'                    => $map_popup,
				) ); ?>
			</div>
		<?php endif; ?>
		<?php
		$main_css   = '';
		$row_css    = '';
		$main_class = '';

		if ( Avada()->layout->is_hundred_percent_template() ) {
			$main_css = 'padding-left:0px;padding-right:0px;';
			if ( Avada()->settings->get( 'hundredp_padding' ) && ! get_post_meta( $c_page_id, 'pyre_hundredp_padding', true ) ) {
				$main_css = 'padding-left:' . Avada()->settings->get( 'hundredp_padding' ) . ';padding-right:' . Avada()->settings->get( 'hundredp_padding' );
			}
			if ( get_post_meta( $c_page_id, 'pyre_hundredp_padding', true ) ) {
				$main_css = 'padding-left:' . get_post_meta( $c_page_id, 'pyre_hundredp_padding', true ) . ';padding-right:' . get_post_meta( $c_page_id, 'pyre_hundredp_padding', true );
			}
			$row_css    = 'max-width:100%;';
			$main_class = 'width-100';
		}
		do_action( 'avada_before_main_container' );
		?>
		<div id="main" class="clearfix <?php echo $main_class; ?>" style="<?php echo $main_css; ?>">
