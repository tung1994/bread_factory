<div id="wrapper">
    <div id="page-wrapper">
<?php
   
    $id = $_GET['id'];
    $sql = "select * from user where user_id = '".$id."'";
    $query = mysql_query($sql);
    $select = mysql_fetch_array($query);

	$username = $password  = $fullname = $level = $status = "";
            
            $modified = date('Y-m-d H:i:s');
    
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
 
		
	    if($username && $fullname && $password && $level && $status) {
            
			   $sqlUpdate = "UPDATE user 
								SET username = '".$username."',
                                    fullname = '".$fullname."',
									password = '".$password."',
                                    modified = '".$modified."',
									status   = '".$status."',
									level    = '".$level."'
							WHERE user_id = '".$id."' ";
                            
            mysql_query($sqlUpdate);
			header("location:index.php?module=user");
		}		
			
	}
?>
<meta charset="utf-8"/>
        <h1>Trang Update User</h1>
        <br />
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
            <div class="form-group">
                <label class="control-label col-xs-2">Username</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" readonly="readonly" name="username" value="<?php echo $select['username'];?>" placeholder="Username" />
                <?php echo isset($errorUsername) ? $errorUsername: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Fullname</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="fullname" value="<?php echo $select['fullname'];?>" placeholder="Fullname"/>
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
        			<option value="1" <?php if($select['level'] == 1) {echo "selected='selected'";} ?>>Member</option>
        			<option value="2" <?php if($select['level'] == 2) {echo "selected='selected'";} ?>>Adminitranstor</option>
        		</select>
                <?php echo isset($errorLevel) ? $errorLevel: "";?>
            </div>  
            </div>
            
            
            <div class="form-group">
                <label class="control-label col-xs-2">Status</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="status" value="<?php echo $select['status'];?>" placeholder="Status"/>
                <?php echo isset($errorStatus) ? $errorStatus: "";?>
            </div>  
            </div>
            
            <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">   
                <input type="submit" name="ok" class="btn btn-primary" value="Update"/>
                <?php echo isset($error) ? $error: "";?>
            </div>
            </div>   
        </form>
        </div></div></div></div>
    </div>
</div>