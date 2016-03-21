<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,  user-scalable=no">
	    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	    <meta name="description" content="<?php bloginfo('description'); ?>" />
	    <meta name="author" content="<?php bloginfo('author'); ?>">
	    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory');?>/favicon.ico">
	    <?php wp_head(); ?>
	</head>
	<body> 
