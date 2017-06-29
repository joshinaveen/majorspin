
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Social Panel">
		<link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/favicon.png">
		<title> Major Spins | Sign In</title>
		<?php echo $this->Html->css(array('admin/bootstrap.min','admin/jquery-ui/jquery-ui-1.10.1.custom.min','admin/bootstrap-reset','admin/table-responsive','admin/font-awesome/font-awesome','admin/jquery-jvectormap-1.2.2','admin/clndr','admin/css3clock/css/style','admin/style','admin/style-responsive',
		'admin/loader','admin/jquery.steps'));
		echo $this->Html->script(array('admin/jquery','admin/bootstrap.min','admin/sm-requests'));
		
		?>
		
		<!--[if lt IE 9]>
			<script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="login-body">
		<div class="container">
                    <?php echo $this->Session->flash(); ?>
			<form class="form-signin" method="POST">
			<?php echo $this->Form->create('User',array('method'=>'POST','class'=>'form-signin')); ?>
				<h2 class="form-signin-heading">sign in now</h2>  
				<div class="login-wrap">
					<div class="user-login-info">
						<?php echo $this->Form->input('email',array('type'=>"text", 'class'=>"form-control",'placeholder'=>'User Name','label'=>false ,'autofocus','required','div'=>false)); ?>
						<?php echo $this->Form->input('password',array('type'=>"password", 'class'=>"form-control",'placeholder'=>'Password','label'=>false, 'autofocus','required','div'=>false)); ?>
						<!--<input type="text" name="username" class="form-control" placeholder="User Name" autofocus required>
						<input type="password" name="password" class="form-control" placeholder="Password" required>--> 
					</div>
					<label class="checkbox">
						<input type="checkbox" value="remember-me"> Remember me
						<span class="pull-right">
							<a data-toggle="modal" href="#myModal"> Forgot Password?</a>
						</span>
					</label>
					<?php echo $this->Form->submit('Sign In',array('type'=>"submit", 'class'=>"btn btn-lg btn-login btn-block")); ?>
					<!--<input type="submit" name="login" value="Sign In" class="btn btn-lg btn-login btn-block">-->
					<?php echo $this->Form->end(); ?>
					<div class="registration">
						Don't have an account yet?
						<a class="" href="registration.php">Create an account</a>
					</div>
				</div>
			</form>
			
		</div>
		
		<script src="js/jquery.js"></script>
		<script src="bs3/js/bootstrap.min.js"></script>
		<script src="js/sm-requests.js"></script>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
			<form method="POST">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Forgot Password ?</h4>
						</div>
						<div class="modal-body">
							<p>Enter your user name below.</p>
							<input type="text" id="username" name="username" placeholder="User Name" class="form-control placeholder-no-fix" autocomplete="off" required>
						</div>
						<div class="modal-body">
							<p>Enter your e-mail address below.</p>
							<input type="email" id="email" name="email" placeholder="Email" class="form-control placeholder-no-fix" autocomplete="off" required>
						</div>
						<div class="modal-footer">
							<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
							<button id="reset" class="btn btn-success" type="button">Reset</button>
							<hr>
							<div id="result"></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>