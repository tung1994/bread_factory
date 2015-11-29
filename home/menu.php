<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<title>Breas Factory</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/css/style_menu.css">
		<link rel="stylesheet" type="text/css" href="css/css/responsive_menu.css">
		<link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'>
		<link type="image/x-icon" href="http://31.193.1.75.srvlist.ukfast.net/media/favicon/default/favicon_1.ico" rel="shortcut icon">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 logo">
					<a href="#"><img src="css/images/logo.png"></a>
				</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<nav class="">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
							</div>

							<div class="collapse navbar-collapse" id="menu">
								<ul class="list-inline">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">about</a></li>
									<li><a href="blog.php">blog</a></li>
									<li><a href="menu.php">menu</a></li>
									<li><a href="contact.php">Contact</a></li>	
								</ul>
							</div>
						</nav>
					</div>
			</div>
		</div>	
	</header>

	<section>
		<div class="container">
			<div class="product">
				<ul class="list-inline row">
                
                <?php
                    require("database/connect.php");
                    
                    $sql = "select * from bread_category";
                    $query = mysql_query($sql);                                                          
                ?>
                
                <?php  while($row = mysql_fetch_array($query)){ ?>
					<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 row-1">
                    
						<a href=""><img src="images/<?php echo $row['image'];?>" width="367" height="287"/></a>
						<p class="text-center text-product"><?php echo $row['name'];?></p>
                    
						<div class="name-price">
							<ul class="list-unstyled">
                            <?php 
                                $sqlBread = "select * from bread where category_id='".$row['category_id']."'";
                                $queryBread = mysql_query($sqlBread);
                            ?>
                            <?php while($num = mysql_fetch_array($queryBread)){?>
								<li class="row">
									<p class="col-lg-6 col-md-8 col-sm-8 col-xs-10">
                                    <?php echo $num['name'];?>
                                    </p>
									<p class="col-lg-6 col-md-4 col-sm-4 col-xs-2 text-right">
                                    <?php echo $num['price'];?>
                                    </p>
								</li>
							<?php } ?>	
							</ul>	
						</div>                    
					</li>
                    <?php }?>									
				</ul>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<p class="copyright text-right">copyright &copy; footer | all rights severed</p>
		</div>			
	</footer>

<script type="text/javascript" src="css/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="css/js/bootstrap.min.js"></script>
</body>

</html>