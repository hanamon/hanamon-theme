<?php
/**
 * header.php - 사이트의 공통 부분 중 헤더 부분을 담당하는 템플릿
 *
 * @package Jimo
 */
 
$site_URI = get_template_directory_uri();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
	<?php
		wp_enqueue_style( 'style-css', $site_URI . '/style.css' );	
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<ul id='skip'>
			<li><a href='#header' title='skip to Main Navigation'>skip to Main Navigation</a></li>
			<li><a href='#main'   title='skip to Main Content'   >skip to Main Content   </a></li>
			<li><a href='#footer' title='skip to Footer'         >skip to Footer		 </a></li>
		</ul>
		<!-- 헤더 -->
		<header id="header">
			<div class="site-logo">
				<a href="<?php bloginfo( 'url' ); ?>" title="HOME">
					<img src="<?php echo $site_URI . '/images/logo.png' ?>" alt="HOME">
				</a>
			</div>
			<div class="site-branding">
				<a href="<?php bloginfo( 'url' ); ?>" title="HOME">
					<? bloginfo( 'name' ); ?>
				</a>
				<p class="site-description">
					<?php bloginfo( 'description' ); ?>
				</p>
			</div>
			<div class="header-right">	
				devparkhana@gmail.com
			</div>
			<div class="main-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' 	=> 'primary',
						'container'			=> 'nav',
						'container_class' 	=> 'normal'
					) );
				?>
			</div>
		</header>
		
		<!-- 컨텐츠 -->
		<div class="wrapper-inner">
			<main id="main" class="main-content">
			