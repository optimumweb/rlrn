
		<!-- END #content -->
		</div>
	<!-- END #content-conainer -->
	</div>
	<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')) { ?>
	<!-- BEGIN #footer-container -->
	<div id="footer-container">
	    <div class="container" id="footer">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	        <!-- BEGIN .column  -->
	        <div class="column"><?php dynamic_sidebar( 'footer-1' ); ?></div>
	        <!-- END .column  -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
	        <!-- BEGIN .column  -->
	        <div class="column"><?php dynamic_sidebar( 'footer-2' ); ?></div>
	        <!-- END .column  -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
	        <!-- BEGIN .column  -->
	        <div class="column"><?php dynamic_sidebar( 'footer-3' ); ?></div>
	        <!-- END .column  -->
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
	        <!-- BEGIN .column  -->
	        <div class="column last"><?php dynamic_sidebar( 'footer-4' ); ?></div>
	        <!-- END .column  -->
			<?php endif; ?>
        <!-- END #footer -->
        </div>
	<!-- END #footer-container -->
    </div>
	<?php } ?>
	<!-- BEGIN #copyright-container -->        
	<div id="copyright-container">
		<!-- BEGIN #copyright -->        
        <div id="copyright" class="container">
            <p>&copy; Copyright <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> <?php _e('All Rights Reserved.', 'pgm') ?></p>
           <!-- BEGIN #copyright-credit -->
            <div class="copyright-credit">
	            <p><?php _e('Powered by', 'pgm') ?> <a href="http://wordpress.org/"><?php _e('WordPress', 'pgm') ?></a> | <a href="http://optimumweb.ca/fr/nos-services/design-web/">Design Web</a> par <a href="http://optimumweb.ca/fr/">OptimumWeb</a></p>
            <!-- END #copyright-credit -->
            </div>
        <!-- END #copyright -->
        </div>
	<!-- END #copyright-container -->
	</div>
<!-- END .wrapper -->
</div> 		

<!-- Theme Hook -->
<?php wp_footer(); ?>
			
<!--END body-->
</body>
<!--END html-->
</html>