<style  type="text/css">
    .container{
        margin-top: 100px;
    }
</style>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta charset="utf-8"/>
<?php
    session_start();
    ob_start();
    
    $name = $pass = "";
    
    if(isset($_POST['ok'])){
        
        if($_POST['name'] == ""){
            $errorname = "please enter name";
        }else{
            $name = $_POST['name'];
        }
        
        if($_POST['pass'] == ""){
            $errorpass = "please enter password";
        }else{
            $pass = $_POST['pass'];
        }
        
        if($name && $pass){
            
            require("database/connect.php");
            
            $sql = "select * from user where username='".$name."' and password = '".md5($pass)."'";
            
            $query = mysql_query($sql);
            
            $total = mysql_num_rows($query);
            
            if($total > 0){
                
                $info = mysql_fetch_assoc($query);
                
                $_SESSION['user'] = $info['username'];
                
                header("location:index.php");
                
            }else{
                
                $error = "false name or pass";
            }
        }
    }
?>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
  		    <div class="panel panel-default">
	  	        <div class="panel-heading">
			    	<h3 class="panel-title">Login</h3>
		 	    </div>
  	<div class="panel-body">
        <form method="POST" action="" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="aGIFdijWZ7iFdVgHJ9R3Q0kcEoD1XrPm7zCRE7KB"/>	                    
            <fieldset>
                <div class="form-group">
                    <input placeholder="Username" class="form-control"  name="name" type="text"/>															</div>
                    <?php echo isset($errorname) ? $errorname : "";?>
                <div class="form-group">
                    <input placeholder="Password" class="form-control"  name="pass" type="password" />															</div>
                    <?php echo isset($errorpass) ? $errorpass : "";?>
                <div class="checkbox">
        				    	    	
                <div class="form-group">
                    <label for="remember">									
                    <input name="remember" type="checkbox" value="remember" id="remember"/>Remember Me? </label>								</div>
           	    </div>
        
                <div class="form-group">
                    <input class="btn btn btn-lg btn-success btn-block" name="ok" type="submit" value="Login"/>
                    <?php echo isset($error) ? $error : "";?>
                </div>
            </fieldset>
        </form>
   </div>
   </div>
   </div>
</div>
</div>