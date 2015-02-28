<?php require_once('couch/cms.php'); ?>
<cms:template title='Facilities' />
<?php
	include 'assets/framework/header.php';
?>
<section id="wrapper">
		<section id="main">
			<section id="content">
				<cms:editable name="main_content" type="richtext">
				</cms:editable>
			</section>
		</section>
</section>
<?php
	include 'assets/framework/footer.php';
?>
<?php COUCH::invoke(); ?>