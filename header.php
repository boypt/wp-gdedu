<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gdedu
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gdedu' ); ?></a>

<!--
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
-->

<!-- orig1 -->
<div class="top">晚上好！欢迎来到广东教育视频网 [<a href="#" class="r">登录</a>] 广东-广州 [<a href="#" class="b">更换</a>] <span><a href="#" class="w">设置</a> | <a href="#" class="w">帮助中心</a> | <a href="#" class="w">退出</a> </span></div>
<div class="logo"> <a href="#" >
  <div class="logo_left"></div>
  </a>
  <div class="logo_right">
    <table width="100%" height="77" border="0" cellspacing="0">
      <tr>
        <td  align="right"><div class="searchbox">
        <?php get_search_form(); ?>
        </td>
      </tr>
    </table>
  </div>
</div>

<nav id="site-navigation" class="main-navigation" role="navigation">
    <div class="nav">
        <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'link_before' => '<span>',
            'link_after' => '</span>'
        ) ); ?>
    </div>
</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
