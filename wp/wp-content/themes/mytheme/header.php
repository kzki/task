<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keyword" content="test,sample,テスト,サンプル">
	<title><?php bloginfo('name'); ?></title>
</head>
<body>
<header>
<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>
<?php wp_nav_menu(); ?>
</header>
<?php get_sidebar(); ?>