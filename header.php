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
            <form name="cscsearch" action="#" method="get" id="cscsearch">
              <div class="l">
                <div class="m">
                  <input name="q" type="text" class="searchkey " onfocus="glb_searchTextOnfocus(this);"  onblur="glb_searchTextOnBlur(this);" value="搜索" size="30" />
                  <input type="submit" class="searchbut" value=""/>
                </div>
              </div>
            </form>
          </div>
          <div align="right"></div></td>
      </tr>
    </table>
  </div>
</div>


<div class="nav">
  <div class="cen">
    <div id=menu_out>
      <div id=menu_in>
        <div id=menu>
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'gdedu' ); ?></button>
            <?php wp_nav_menu( array( 
                'theme_location' => 'primary',
                'menu_class' => 'menu_line',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            ) ); ?>
          <ul id=nav>
            <li><a class=nav_on id=mynav0 onmouseover=javascript:qiehuan(0) href="#/"><span>首 页</span></A></li>
            <li class="menu_line"></li>
            <li><a href="#" onmouseover="javascript:qiehuan(1)" id="mynav1" class="nav_off"><span>班班通</span></a></li>
            <li class="menu_line"></li>
            <li><a href="#" onmouseover="javascript:qiehuan(2)" id="mynav2" class="nav_off"><span>资源中心</span></a></li>
            <li class="menu_line"></li>
            <li><a href="#" onmouseover="javascript:qiehuan(3)" id="mynav3" class="nav_off"><span>同步课堂</span></a></li>
            <li class="menu_line"></li>
            <li><a href="#" onmouseover="javascript:qiehuan(4)" id="mynav4" class="nav_off"><span>特色专题</span></a></li>
            <li class="menu_line"></li>
            <li><a href="#" onmouseover="javascript:qiehuan(5)" id="mynav5" class="nav_off"><span>应用下载</span></a></li>
            <li class="menu_line"></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--

-->

		<nav id="site-navigation" class="main-navigation" role="navigation">
		</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
