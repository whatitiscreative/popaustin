<?php
/**
 * Template Name: Home
 * Description: Home Template
 *
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>
<div id="content" <?php Avada()->layout->add_style( 'content_style' ); ?>>
	<!-- Wii Banner Updates -->
	<div class="intro-banner">
		<h1>AUSTIN’S PREMIER INTERNATIONAL ART EVENT</h1>
		<p>November 9-12 at Fair Market</p>
		<div class="button-row">
			<a target="_blank" href="https://wl.seetickets.us/event/POP-Austin/351489?afflky=POPAustin" class="button button-default">Buy tickets</a>
			<a target="_blank" href="http://www.shoppopaustin.com/curated-art-categories/" class="button button-default">Shop art</a>
		</div>
	</div>
	<!-- /Wii Banner Updates -->

	<!-- Animation Sequence -->
	<section class="animation-sequence">
		  <div class="boy joey"></div>
		  <div class="boy donnie"></div>
		  <div class="boy jesse"></div>
	</section>

	<div class="mobile-animation-sequence">
		
	</div>
	<!-- /Animation Sequence -->

	<div class="fusion-row">
		<!-- Video Modal -->
		<section class="video-modal">
				<a class="swipebox video-modal-large" rel="vimeo" href="<?php the_field('homepage_video_url'); ?>" style="background-image: url('<?php the_field('homepage_video_thumbnail'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center; display: block;">
					<span class="play-icon video-modal-icon">
						<p>PLAY<br>VIDEO</p>
					</span>
				</a>
		</section>

		<!-- /Video Modal -->

		<!-- CTA Blocks -->
		<section class="cta-blocks">
			<div class="block">
				<h3><?php the_field('cta_block_1_headline'); ?></h3>
				<a target="_blank" href="<?php the_field('cta_block_1_url'); ?>" class="button button-sm"><?php the_field('cta_block_1_label'); ?>
					<svg width="10" height="9" viewBox="0 0 10 9" xmlns="http://www.w3.org/2000/svg"><path d="M10 4.5L5.585 0l-.963.96 2.806 2.857H0v1.366h7.428L4.622 8.025 5.585 9" fill="#FFF" fill-rule="evenodd"/></svg>			
				</a>
			</div>
			<div class="block">
				<h3><?php the_field('cta_block_2_headline'); ?></h3>
				<a target="_blank" href="<?php the_field('cta_block_2_url'); ?>" class="button button-sm dark"><?php the_field('cta_block_2_label'); ?>
					<svg width="12" height="9" viewBox="0 0 12 9" xmlns="http://www.w3.org/2000/svg"><path d="M12 4.5L6.702 0 5.546.96l3.367 2.857H0v1.366h8.913L5.546 8.025 6.702 9" fill="#000" fill-rule="evenodd"/></svg>
				</a>
			</div>
		</section>
		<!-- /CTA Blocks -->

		<!-- Image Gallery -->
		<section class="gallery-grid lightbox-image-gallery">
			<h1>The Event</h1>
			<div class="grid-row">
				<?php while(have_rows('image_gallery')): the_row(); ?>
					<a href="<?php echo get_sub_field('image'); ?>" class="swipebox gallery-block" style="background-image: url('<?php echo get_sub_field('image'); ?>'); height: 270px; background-size: cover; background-repeat: no-repeat; background-position: center;">
						<p class="photo-caption"><?php the_sub_field('caption'); ?></p>
					</a>
				<?php endwhile; ?>
			</div>
		</section>
		<!-- /Image Gallery -->

	</div>
</div>

<script type="text/javascript">
		/* requestAnimationFrame poly */

			(function() {
			    var lastTime = 0;
			    var vendors = ['webkit', 'moz'];
			    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
			        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
			        window.cancelAnimationFrame =
			          window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
			    }

			    if (!window.requestAnimationFrame)
			        window.requestAnimationFrame = function(callback, element) {
			            var currTime = new Date().getTime();
			            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
			            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
			              timeToCall);
			            lastTime = currTime + timeToCall;
			            return id;
			        };

			    if (!window.cancelAnimationFrame)
			        window.cancelAnimationFrame = function(id) {
			            clearTimeout(id);
			        };
			}());


			var _containerHeight = 1400;
			var _width, _height, _scrollHeight;
			var letters = document.getElementsByTagName('span');
			var _movingElements = [];
			var _scrollPercent = 0;
			var pre = prefix();
			var _jsPrefix  = pre.lowercase;
			if(_jsPrefix == 'moz') _jsPrefix = 'Moz'
			var _cssPrefix = pre.css;
			var _positions = [
			  {
			    name: 'joey', 
			   	start: {
			    	percent: .008, x: -0.2, y: 0
			  	},
			    end: {
			      percent: 0, x: 0, y: 0
			    }
			  },
			  {
			    name: 'donnie', 
			   	start: {
			    	percent: .003, x: 0.4, y: 0
			  	},
			    end: {
			      percent: 0, x: 0, y: 0
			    }
			  },
			  {
			    name: 'jesse', 
			   	start: {
			    	percent: .0025, x: 0.5, y: 0
			  	},
			    end: {
			      percent: 0, x: 0, y: 0
			    }
			  },
			 
			]

			resize();
			initMovingElements();

			function initMovingElements() {
			  for (var i = 0; i < _positions.length; i++) {
			    _positions[i].diff = {
			      percent: _positions[i].end.percent - _positions[i].start.percent,
			      x: _positions[i].end.x - _positions[i].start.x,
			      y: _positions[i].end.y - _positions[i].start.y,
			    }
			    _positions[i].target = {};
			    _positions[i].current = {};
			    var el = document.getElementsByClassName('boy '+_positions[i].name)[0];
			    _movingElements.push(el);
			  }
			}

			function resize() {
				_width = window.innerWidth;
			  _height = window.innerHeight;
			  _scrollHeight = _containerHeight-_height;
			}



			function updateElements() {
			  for (var i = 0; i < _movingElements.length; i++) {
			    var p = _positions[i];
			    if(_scrollPercent <= p.start.percent) {
			      p.target.x = p.start.x*_width;
			      p.target.y = p.start.y*_containerHeight;
			    } else if(_scrollPercent >= p.end.percent) {
			      p.target.x = p.end.x*_width;
			      p.target.y = p.end.y*_containerHeight;
			    } else {
			      p.target.x = p.start.x*_width + (p.diff.x*(_scrollPercent-p.start.percent)/p.diff.percent*_width);
			      p.target.y = p.start.y*_containerHeight + (p.diff.y*(_scrollPercent-p.start.percent)/p.diff.percent*_containerHeight);
			    }
			    
			    // lerp
			    if(!p.current.x) {
			      p.current.x = p.target.x;
			      p.current.y = p.target.y;
			    } else {
			      p.current.x = p.current.x + (p.target.x - p.current.x)*0.05;
			      p.current.y = p.current.y + (p.target.y - p.current.y)*0.05;
			    }
			    _movingElements[i].style[_jsPrefix+'Transform'] = 'translate3d('+p.current.x+'px, '+
			        p.current.y+'px, 0px)';
			  }
			}



			function loop() {
			  _scrollOffset = window.pageYOffset || window.scrollTop;
			  _scrollPercent = _scrollOffset/_scrollHeight || 0;
			  updateElements();
			  
			  requestAnimationFrame(loop);
			}

			loop();

			window.addEventListener('resize', resize);

			/* prefix detection http://davidwalsh.name/vendor-prefix */

			function prefix() {
			  var styles = window.getComputedStyle(document.documentElement, ''),
			    pre = (Array.prototype.slice
			      .call(styles)
			      .join('') 
			      .match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o'])
			    )[1],
			    dom = ('WebKit|Moz|MS|O').match(new RegExp('(' + pre + ')', 'i'))[1];
			  return {
			    dom: dom,
			    lowercase: pre,
			    css: '-' + pre + '-',
			    js: pre[0].toUpperCase() + pre.substr(1)
			  };
			}



</script>

<?php do_action( 'avada_after_content' ); ?>
<?php get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
