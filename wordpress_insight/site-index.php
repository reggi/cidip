<?php
header('Content-Type: text/html; charset=utf-8');
$cache = $_SERVER['REQUEST_URI'];
if (0 === strpos($cache, '/blog') ||
    0 === strpos($cache, '/portfolio') ||
    0 === strpos($cache, '/resume') ||
    0 === strpos($cache, '/about') ||
    0 === strpos($cache, '/feed')
){
  define('WP_USE_THEMES', true);
	require('./wordpress/wp-blog-header.php');
}else{
  define('WP_USE_THEMES', false);
	require('./wordpress/wp-blog-header.php');
	require('./codeigniter/index.php');
}