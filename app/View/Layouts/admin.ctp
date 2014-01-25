<!DOCTYPE html>
<html lang="fr">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Admin
	</title>
	<?php echo $this->Html->css("bootstrap.min") ?>
	<?php echo $this->Html->css("admin_style") ?>
	<?php echo $this->Html->script("bootstrap.min") ?>
	<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js')); ?>

	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<body>
	<div class="container">
		<div class="row">
			<header class="col-md-12">
				<nav class="navbar navbar-inverse" role="navigation">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Template Admin</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><?php echo $this->Html->link('Article',array('controller' => 'posts','action' => 'index')) ?></li>
							<li><?php echo $this->Html->link('Dedicate',array('controller' => 'dedicates','action' => 'index')) ?></li>
							<li><?php echo $this->Html->link('Options',array('controller' => 'slides','action' => 'index')) ?></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Logout</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mouhssine <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</header>


			<div class="col-md-3 sidebar">

				<div class="panel panel-default">
					<?php echo $this->element('notif'); ?>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. mollit anim id est laborum.
					</div>
				</div>

			</div>
			<div class="col-md-9">
				<div class="panel panel-default content">
				  <div class="panel-heading">
				    <h3 class="panel-title">Title Lorem ipsum</h3>
				  </div>
				  <div class="panel-body">

					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>
						
					</div>
				</div>
			</div>

			<div style="clear: both;"></div>
			<div class="col-md-12">
				<footer>
					<div class="col-md-6">
						Copyright &copy 2012 - 2014
					</div>
					<div class="col-md-6" style="text-align:right">
					 	Desing By <a href="#">Ib.Mouhssine</a>
					</div>

				</footer>
			</div> 
		</div>
	</div>
</body>
</html>