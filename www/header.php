<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" />

		<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
		<?php wp_head(); ?>
	</head>

	<body>

		<!-- Static navbar -->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<?php /* Primary navigation */
						wp_nav_menu( array(
						  'theme_location' => 'primary',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav navbar-nav',
						  //Process nav menu using our custom nav walker
						  'walker' => new wp_bootstrap_navwalker())
						);
					?>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../navbar/">Default</a></li>
						<li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
						<li><a href="../navbar-fixed-top/">Fixed top</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>