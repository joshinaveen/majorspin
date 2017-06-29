<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" content="Social Panel">

		<meta name="author" content="Social Panel">

		<link rel="shortcut icon" href="images/favicon.png">

		<!--<title><?php //echo($WebsiteName); ?></title>-->
		
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $this->fetch('title'); ?>
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css(array('admin/bootstrap.min','admin/jquery-ui/jquery-ui-1.10.1.custom.min','admin/bootstrap-reset','admin/table-responsive','admin/font-awesome/font-awesome','admin/jquery-jvectormap-1.2.2','admin/clndr','admin/css3clock/css/style','admin/style','admin/style-responsive',
		'admin/loader','admin/jquery.steps','jquery.validationEngine'));
		echo $this->Html->script(array('admin/jquery','admin/bootstrap.min','admin/sm-requests','jquery.validationEngine','languages/jquery.validationEngine-en','ckeditor/ckeditor'));
	?>
</head>
<body>
	<div id="container">
		
		<?php echo $this->element('admin_header'); ?>
		<?php echo $this->element('left_nav'); ?>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->element('footer'); ?>
		
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	
	<script type="text/javascript">
	$(document).ready(function() {
		var owl = $("#clients");
		owl.owlCarousel({
		  items : 5,
		  itemsDesktop : [1200,5], 
		  itemsDesktopSmall : [900,3], 
		  itemsTablet: [600,2], 
		  itemsMobile : [480,1] 
		});
		$("#next").click(function(){
			owl.trigger('owl.next');
		})
		$("#prev").click(function(){
			owl.trigger('owl.prev');
		})

		
	});

</script>
<script type="text/javascript">
	$(document).ready(function() {
		var owl = $("#testimonials");
		owl.owlCarousel({
		  items : 2,
		  itemsDesktop : [1200,2], 
		  itemsDesktopSmall : [900,2], 
		  itemsTablet: [600,1], 
		  itemsMobile : [480,1] 
		});
		$("#next1").click(function(){
			owl.trigger('owl.next');
		})
		$("#prev1").click(function(){
			owl.trigger('owl.prev');
		})
	});
</script>
</body>
</html>
