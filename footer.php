		</div> <!-- end #page div -->

		<?php include (TEMPLATEPATH . '/banner728-bottom.php'); ?>

		<?php /* footer widgets */ if ( is_active_sidebar('widget-5') || is_active_sidebar('widget-6') || is_active_sidebar('widget-7') || is_active_sidebar('widget-8') ) { ?>
		<div id="footer-widgets" class="maincontent">
			<div class="limit clearfix">
				<div class="footer-widget1">
					<?php dynamic_sidebar('Footer Widget 1'); ?>
				</div>
				<div class="footer-widget2">
					<?php dynamic_sidebar('Footer Widget 2'); ?>
				</div>
				<div class="footer-widget3">
					<?php dynamic_sidebar('Footer Widget 3'); ?>
				</div>
				<div class="footer-widget4">
					<?php dynamic_sidebar('Footer Widget 4'); ?>
				</div>
			</div>
		</div>
		<?php } ?>

		<div id="footer">
			<div class="limit clearfix">
				<?php include (TEMPLATEPATH . '/sub-icons.php'); ?>
				
				<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.es_CL"><img alt="Licencia Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a><br />Este <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" rel="dct:type">obra</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.e-construccion.cl" property="cc:attributionName" rel="cc:attributionURL">e-construcci&oacute;n</a> est&aacute; bajo una <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.es_CL">Licencia Creative Commons Atribuci&oacute;n-CompartirIgual 3.0 Unported</a>.
				
			</div>
		</div>

	</div>  <!-- end #wrap div -->

</div> <!-- end #outer-wrap div -->



<?php wp_footer(); ?>

</body>

</html>