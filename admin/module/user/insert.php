<div id="wrapper">
    <div id="page-wrapper">
<?php
	$username = $password  = $fullname = $date  = $dated = $level = $status = "";
	if(isset($_POST['ok'])) {

		if($_POST['username'] == ""){
			$errorUsername = "vui lòng nhập tên";
		} else {
			$username = $_POST['username'];
		}
        
        if($_POST['fullname'] == ""){
			$errorFullname = "vui lòng nhập đầy đủ họ tên";
		} else {
			$fullname = $_POST['fullname'];
		}


		if($_POST['pass'] == ""){
			$errorPass = "Vui lòng nhập password";
		}else{
            $password = $_POST['pass'];
		}
		

		if($_POST['date'] == ""){
			$errorDate = "vui lòng nhập ngày lập";
		} else {
			$date = $_POST['date'];
		}

		
		if($_POST['dated'] == ""){
			$errorDated = "vui lòng nhập ngày sửa";
		} else {
			$dated = $_POST['dated'];
		}

        if($_POST['level'] == ""){
			$errorLevel = "vui lòng chọn level";
		} else {
			$level = $_POST['level'];
		}
        
        if($_POST['status'] == ""){
			$errorStatus = "vui lòng cập nhật trạng thái";
		} else {
			$status = $_POST['status'];
		}
		
	    if($username && $fullname && $password && $date  && $dated && $level && $status) {

			$listname = "select * from user where username ='".$username."'";
			$list = mysql_query($listname);
            if(mysql_num_rows($list) > 0){
			 	$error = "tên tài khoản đã tồn tại";
		    }else {

    			 $sql =  "Insert into user(`username`, `fullname`, `password`, `created`,`modified`,`level`,`status`) values('".$username."','".$fullname."','".$password."','".$date."','".$dated."','".$level."','".$status."')";                 
    			 mysql_query($sql);
    			 header("location:index.php?module=user");
            }
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Insert User</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
            <div class="form-group">
                <label class="control-label col-xs-2">Username</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="username" placeholder="Username" />
                <?php echo isset($errorUsername) ? $errorUsername: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Fullname</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="fullname" placeholder="Fullname"/>
                <?php echo isset($errorFullname) ? $errorFullname: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Password</label>
            <div class="col-xs-10">
                <input type="password" class="form-control" name="pass" placeholder="Password"/>
                <?php echo isset($errorPass) ? $errorPass: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Level</label>
            <div class="col-xs-10" >
                <select name="level" class="form-control">
        			<option value="">Vui lòng chọn</option>
        			<option value="1">Member</option>
        			<option value="2">Adminitranstor</option>
        		</select>
                <?php echo isset($errorLevel) ? $errorLevel: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Created</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="date" placeholder="created"/>
                <?php echo isset($errorDate) ? $errorDate: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Modified</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="dated" placeholder="Modified"/>
                <?php echo isset($errorDated) ? $errorDated: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Status</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="status" placeholder="Status"/>
                <?php echo isset($errorStatus) ? $errorStatus: "";?>
            </div>  
            </div>
            
            <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">   
                <input type="submit" name="ok" class="btn btn-primary" value="Insert"/>
                <?php echo isset($error) ? $error: "";?>
            </div>
            </div>   
        </form>
        </div></div></div></div>
    </div>
</div>