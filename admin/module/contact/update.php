<div id="wrapper">
    <div id="page-wrapper">
<?php
    $id = $_GET['id'];
    $sql = "select * from contact where contact_id = '".$id."'";
    $query = mysql_query($sql);
    $select = mysql_fetch_array($query);

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

    	    $sqlUpdate = 	"UPDATE contact
								SET address       = '".$address."',
									phone_number  = '".$phone."',
                                    fax           = '".$fax."',
									email         = '".$email."',
                                    hotline       = '".$hot."'
							WHERE contact_id = '".$id."' ";
                            
            mysql_query($sqlUpdate);
			header("location:index.php?module=contact");
            
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Update Contact</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
        
            <div class="form-group">
                <label class="control-label col-xs-2">Address</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $select['address'];?>"/>
                <?php echo isset($errorAddress) ? $errorAddress: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Phone</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="phone" placeholder="phone" value="<?php echo $select['phone_number'];?>"/>
                <?php echo isset($errorPhone) ? $errorPhone: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Fax</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="fax" placeholder="fax" value="<?php echo $select['fax'];?>"/>
                <?php echo isset($errorFax) ? $errorFax: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Email</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $select['email'];?>"/>
                <?php echo isset($errorEmail) ? $errorEmail: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Hotline</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="hot" placeholder="hotline" value="<?php echo $select['hotline'];?>"/>
                <?php echo isset($errorHot) ? $errorHot: "";?>
            </div>  
            </div>
            
            
            <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">   
                <input type="submit" name="ok" class="btn btn-primary" value="Update"/>
                
            </div>
            </div>   
        </form>
        </div></div></div></div>
    </div>
</div>