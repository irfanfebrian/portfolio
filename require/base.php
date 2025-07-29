<?php
	define('BASE_URL','https://portfolio-df051.wasmer.app/');
	function site_url ( $path = '')
	{
		if( is_array( $path ))
		{
			return BASE_URL.'/'.(implode('/', $path));
		}else if( is_string ( $path ) )
		{
			return BASE_URL.'/'.ltrim($path,'/');
		}
		return BASE_URL;
	}
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0">
			<meta name="robots" content="noindex">
			<meta name="author" content="Irfan Febrian">
			<meta name="description" content="Fullstack Designer in Jakarta">
			<meta name="keywords" content="irfan febrian, ui, ux, web, designer, creative, design, multimedia, jakarta, south jakarta, indonesia">
			<meta name="google" content="notranslate" />
			<meta property="og:image" itemprop="image" content="http://irfanf.com/if.png" />
			<title>Done by Irfan Febrian</title>    
			<!-- General Asset Start-->
			<script src="<?php echo site_url('assets/js/jquery.min.js'); ?>"></script>
			<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
			<link href="<?php echo site_url('assets/css/aos1.css'); ?>" rel="stylesheet">
			<link href="<?php echo site_url('assets/css/style.css'); ?>" rel="stylesheet">
			<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
			<script src="<?php echo site_url('assets/js/aos1.js'); ?>"></script>
			<script src="<?php echo site_url('assets/js/bx-c.js'); ?>"></script>
			<link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url('favicons/apple-icon-57x57.png'); ?>">
			<link rel="apple-touch-icon" sizes="60x60" href="<?php echo site_url('favicons/apple-icon-60x60.png'); ?>">
			<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url('favicons/apple-icon-72x72.png'); ?>">
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('favicons/apple-icon-76x76.png'); ?>">
			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url('favicons/apple-icon-114x114.png'); ?>">
			<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url('favicons/apple-icon-120x120.png'); ?>">
			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url('favicons/apple-icon-144x144.png'); ?>">
			<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url('favicons/apple-icon-152x152.png'); ?>">
			<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('favicons/apple-icon-180x180.png'); ?>">
			<link rel="icon" type="image/png" sizes="192x192" href="<?php echo site_url('favicons/favicon-192x192.png'); ?>">
			<link rel="icon" type="image/png" sizes="96x96" href="<?php echo site_url('favicons/favicon-96x96.png'); ?>">
			<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url('favicons/favicon-32x32.png'); ?>">
			<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('favicons/favicon-16x16.png'); ?>">
			<link rel="manifest" href="<?php echo site_url('favicons/manifest.json'); ?>">
			<meta name="msapplication-TileImage" content="<?php echo site_url('favicons/ms-icon-144x144.png'); ?>">
		
			<!-- General Asset End-->
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
			
			



