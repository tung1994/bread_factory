<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
		<title>Breas Factory</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap-theme.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/css/style_index.css"/>
		<link rel="stylesheet" type="text/css" href="css/css/responsive_index.css"/>
		<link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css"/>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'/>
		<link type="image/x-icon" href="http://31.193.1.75.srvlist.ukfast.net/media/favicon/default/favicon_1.ico" rel="shortcut icon"/>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 logo">
					<a href="#"><img src="css/images/logo.png"/></a>
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
                    <?php while($rows = mysql_fetch_array($query)){?>
					<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6 row-1">
						<a href=""><img src="images/<?php echo $rows['image'];?>" width="367" height="287"/></a>
						<p class="text-center text-product"><?php echo $rows['name'];?></p>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</section>

	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col-left">
						<div class="what-new"><a href="">What's new</a></div>
						<p class="title">We Have Free Templates for Everyone</p>
						<p class="text-footer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,<span> but also the leap</span> into electronic typesetting, remaining essentially unchanged.recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

						<p class="text-footer-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <span>http://localhost/new_fashion/index.html</span></p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-right">
					<div class="form-contact">
						<div class="join-our text-center">JOIN OUR <br />MAILING LIST</div>
						 <form class="navbar-form" role="search">
					        <div class="input-group">
					            <input type="text" class="form-control" placeholder="" name="srch-term" id="srch-term"/>
					            <div class="input-group-btn">
					                <button class="btn btn-default" type="submit"><i class="fa fa-play"></i></button>
					            </div>
					        </div>
					    </form>
					    <div class="join-our text-center">GET DAILY<br> UPDATES,<br>SHARE<br> SOMETHOUGHTS</div>
					    <p class="text-center">
					    <a href="#"><span class="twitter"><i class="fa fa-twitter"></i></span></a>
					    <a href="#"><span class="facebook"><i class="fa fa-facebook"></i></span></a>
					    </p>
					</div>
						
					    <p class="copyright">copyright &copy; footer | all rights severed</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

<script type="text/javascript" src="css/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="css/js/bootstrap.min.js"></script>
</body>

</html>