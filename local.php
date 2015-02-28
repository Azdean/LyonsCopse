<?php require_once('couch/cms.php'); ?>
<cms:template title='Local Area' />
<?php
	include 'assets/framework/header.php';
?>
<section id="wrapper">
		<section id="main">
			<p>This is the body</p>
		</section>
</section>
<?php
	include 'assets/framework/footer.php';
?>
<?php COUCH::invoke(); ?>