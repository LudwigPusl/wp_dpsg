		<footer role="contentinfo" class="container">
		
			<div id="inner-footer" class="clearfix">
				<div id="widget-footer" class="clearfix row-fluid">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
					<?php endif; ?>
				</div>
				
				<nav class="clearfix">
					<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>
				
				<p class="pull-right">
					<a href="https://github.com/LudwigPusl/wp_dpsg" title="wp_dpsg on Github">wp_dpsg</a> by 
					<a href="http://dpsg-schliersee.de" title="DPSG St. Sixtus Schliersee">DPSG St. Sixtus Schliersee</a> based on 
					<a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>
		
				<p class="attribution">&copy; <?php the_time('Y') ?> <?php bloginfo('name'); ?></p>
			
			</div> <!-- end #inner-footer -->
			
		</footer> <!-- end footer -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>