<?php
/**
 * Template Name:Frontpage
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main-navigation pulldown hide">
<h1>Zaterdag 18 oktober 2014</h1>
<h2>Scouting St. Laurentius - Alkmaar</h2>
<div class="click"><br><br><br>
<a href="/sample-page/" class="pure-button button-success" style="color:white">NAAR DE WEBSITE</a>

</div></div>
<div class='bg' style="margin-top:0px auto;text-align:center"><a href="/sample-page/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontpage.png"></a>
</div>
<style>
.main-navigation, body, h1, h2, .bg, .click { display: none; }
.main-navigation { height:120px;z-index: 2}
</style>
<script>
// Better focus for hidden submenu items for accessibility.
( function( $ ) {
	$( 'body' ).fadeIn('slow',function(){
		$( '.main-navigation' ).fadeIn('slow',function(){
			$( 'h1' ).fadeIn('slow',function(){
				$( 'h2' ).fadeIn('slow',function(){
						$( '.main-navigation' ).animate({marginTop:'500px'});
						$( '.bg' ).fadeIn('slow',function(){
							$( 'h2' ).fadeOut('slow',function(){
								$( 'h1' ).fadeOut('slow',function(){
									$( '.click' ).fadeIn('slow',function(){
								
								    });
								
								});
							});
						});
				});
			});	
		});	
	});
} )( jQuery );

</script>
</body>
</html>