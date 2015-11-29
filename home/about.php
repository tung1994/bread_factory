<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<title>Breads Factory</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/css/style_about.css">
		<link rel="stylesheet" type="text/css" href="css/css/responsive_about.css">
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
	<div class="content-banner container">
    
    <?php 
        require("database/connect.php");
        $sql = "select * from about";
        $query = mysql_query($sql);
    ?>
    <?php while($row = mysql_fetch_array($query)){?>
		<div class="content">
			<p class="title">We Have Free Templates for Everyone</p>
			<p class="text-content" style="text-align: justify;"><?php echo $row['content'];?></p>
		</div>
    <?php } ?>
		
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