<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php exgw_page_title();?></title>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<div id="site-title">
				<span><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Exceptional Greenwood</a></span>
				</div> 
			</div>
			<div id="access" class="navi" role="navigation">
				 <?php wp_nav_menu( array( 'menu' => 'main','sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
			</div>
		</div>
	</div>
	<div id="main">