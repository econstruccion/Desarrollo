<?php
	global $solostream_options;
	if ( $solostream_options['solostream_layout'] !== "Full-Width" ) {
?>

		<div id="contentright">

			<div id="sidebar" class="clearfix">
			
			<div id="social-w">
				<div id="gmas">
			
					<!-- Place this tag in your head or just before your close body tag. -->
					<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
					{lang: 'es-419'}
					</script>

					<!-- Place this tag where you want the badge to render. -->
					<div class="g-plus" data-width="300" data-height="69" data-href="//plus.google.com/115288728314980996419" data-rel="publisher"></div>
				</div>
			
				<div id="fb-border">
					<div class="fb-like" data-href="http://www.facebook.com/econstruccion" data-send="false" data-width="280" data-show-faces="true" data-font="arial"></div>
				</div>
			
			
				<div id="gplus">
					<!-- Place this tag where you want the +1 button to render. -->
					<div class="g-plusone" data-annotation="inline" data-width="300" data-href="https://plus.google.com/115288728314980996419"></div>

					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">
					(function() {
					var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					})();
					</script>
				</div>
			
				<div id="twitter-boton">
				
				
				<a href="https://twitter.com/econstruccion" class="twitter-follow-button" data-show-count="true" data-lang="es" data-dnt="true">Seguir a @econstruccion</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

									
				</div>
				
				<div id="follow">
				
				<div id="ftxt"><a href="http://www.e-construccion.cl/social">Otras redes &raquo;</a></div>
				</div>
				
				<div id="yts">
				<iframe id="fr" src="http://www.youtube.com/subscribe_widget?p=econstruccion" scrolling="no" frameBorder="0" style="width: 300px; height: 105px;"></iframe>
				</div>
				
				
			</div>	
			
			
			
			
			
			
			
			
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-Wide - Top') ) : ?>
				<div class="widget">
					<h3 class="widgettitle">Text Widget</h3>
					<div class="textwidget">
						This is a widget area. Visit the Widget page in your WordPress control panel to add some content here
					</div>
				</div>

				<div class="widget">
					<h3 class="widgettitle">Text Widget</h3>
					<div class="textwidget">
						This is a widget area. Visit the Widget page in your WordPress control panel to add some content here
					</div>
				</div>
				<?php endif; ?>
			</div>

			<div id="sidebar-bottom" class="clearfix">

				<div id="sidebar-bottom-left">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-Wide - Bottom Left') ) : ?>
					<?php endif; ?>
				</div>

				<div id="sidebar-bottom-right">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar-Wide - Bottom Right') ) : ?>
					<?php endif; ?>
				</div>

			</div>

		</div>

<?php } ?>