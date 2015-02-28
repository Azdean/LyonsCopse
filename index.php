<?php require_once('couch/cms.php'); ?>
<cms:template title='Notice Board and Banner' />
<?php
	include 'assets/framework/header.php';
?>

<section id="wrapper">
		<section id="banner">
		<img id="bannerLogo" src="assets/img/bannerLogo.png">
		
		<div id="bannerText">	
			<h2>
				<cms:editable name='bannerTitle' type='text'>
					Lorem
				</cms:editable>
			</h2>
				
			<p>
				<cms:editable name="bannerSubTitle" type="text">
					Ipsum
				</cms:editable>
			</p>
		</div>

		</section>

		<section id="main">
				<section id="title">
						<p>Notice Board</p>
				</section>

			<section id="content">	
				<cms:editable name='main_content' type='richtext'>
						<p>This is the body</p>
				</cms:editable>
			</section>
		</section>
				
<?php
	include 'assets/framework/footer.php';
?>
<?php COUCH::invoke(); ?>