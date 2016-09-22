<html>
<head>
	<title>Trabalho 2 POO</title>
	<link rel="stylesheet" type="text/css" href="<?= $this->request->base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->request->base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->request->base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->request->base_url(); ?>assets/font-awesome/css/font-awesome.css">
  	<link href="<?= $this->request->base_url(); ?>assets/DataTables/dataTables.scroller.min.css" rel="stylesheet">
	<link href="<?= $this->request->base_url(); ?>assets/DataTables/dataTables.colReorder.min.css" rel="stylesheet">
	<link href="<?= $this->request->base_url(); ?>assets/DataTables/dataTables.bootstrap.css" rel="stylesheet">
	<meta charset="utf-8" />
</head>
<body>
<header>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= $this->request->base_url(); ?>">POO - Framework</a>
			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav">
	        		<li><a href="<?= $this->request->base_url(); ?>"><i class="fa fa-home"></i> Página Inicial</a></li>
	        		<li><a href="<?= $this->request->base_url(); ?>"><i class="fa fa-hand-spock-o"></i> Sobre</a></li>
	        		<li class="dropdown">
	          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-institution"></i> Biblioteca <span class="caret"></span></a>
	          			<ul class="dropdown-menu">
				            <li><a href="<?= $this->request->base_url(); ?>livro"><i class="fa fa-book"></i> Livros</a></li>
				            <li><a href="#"><i class="fa fa-calendar"></i> Empréstimos</a></li>
				            <li><a href="#"><i class="fa fa-users"></i> Clientes</a></li>
	          			</ul>
	        		</li>
	        		<li><a href=""><i class="fa fa-envelope"></i> Contato</a></li>
	      		</ul>
    		</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>
</header>