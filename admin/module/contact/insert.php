<div id="wrapper">
    <div id="page-wrapper">
<?php
	$address = $phone  = $fax = $email  = $hot = "";
	if(isset($_POST['ok'])) {

		if($_POST['address'] == ""){
			$errorAddress = "vui lòng nhập địa chỉ";
		} else {
			$address = $_POST['address'];
		}
        
        if($_POST['phone'] == ""){
			$errorPhone = "vui lòng nhập số điện thoại";
		} else {
			$phone = $_POST['phone'];
		}


		if($_POST['fax'] == ""){
			$errorFax = "Vui lòng nhập số fax";
		}else{
            $fax = $_POST['fax'];
		}
		

		if($_POST['email'] == ""){
			$errorEmail = "vui lòng nhập địa chỉ email";
		} else {
			$email = $_POST['email'];
		}

		
		if($_POST['hot'] == ""){
			$errorHot = "vui lòng nhập hotline";
		} else {
			$hot = $_POST['hot'];
		}
        
		
	    if($address && $phone && $fax && $email && $hot) {

    			 $sql =  "Insert into contact(`address`, `phone_number`, `fax`, `email`,`hotline`) values('".$address."','".$phone."','".$fax."','".$email."','".$hot."')";                 
    			 mysql_query($sql);
    			 header("location:index.php?module=contact");
            
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Insert Contact</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
        
            <div class="form-group">
                <label class="control-label col-xs-2">Address</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="address" placeholder="address" />
                <?php echo isset($errorAddress) ? $errorAddress: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Phone</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="phone" placeholder="phone"/>
                <?php echo isset($errorPhone) ? $errorPhone: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Fax</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="fax" placeholder="fax"/>
                <?php echo isset($errorFax) ? $errorFax: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Email</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="email" placeholder="email"/>
                <?php echo isset($errorEmail) ? $errorEmail: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Hotline</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="hot" placeholder="hotline"/>
                <?php echo isset($errorHot) ? $errorHot: "";?>
            </div>  
            </div>
            
            
            <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">   
                <input type="submit" name="ok" class="btn btn-primary" value="Insert"/>
                
            </div>
            </div>   
        </form>
        </div></div></div></div>
    </div>
</div>