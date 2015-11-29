<div id="wrapper">
    <div id="page-wrapper">
<?php
	$content = $date  = $dated = $status = "";
	if(isset($_POST['ok'])) {

		if($_POST['content'] == ""){
			$errorContent = "vui lòng nhập nội dung";
		} else {
			$content = $_POST['content'];
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
        
        if($_POST['status'] == ""){
			$errorStatus = "vui lòng cập nhật trạng thái";
		} else {
			$status = $_POST['status'];
		}
		
	    if($content && $date  && $dated && $status) {

			$listname = "select * from about where content ='".$content."'";
			$list = mysql_query($listname);
            if(mysql_num_rows($list) > 0){
			 	$error = "nội dung này đã tồn tại";
		    }else {

    			 $sql =  "Insert into about(`content`, `created`,`modified`,`status`) values('".$content."','".$date."','".$dated."','".$status."')";                 
    			 mysql_query($sql);
    			 header("location:index.php?module=about");
            }
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Insert About</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
        
            <div class="form-group">
                <label class="control-label col-xs-2">Content</label>
            <div class="col-xs-10">
                <textarea  class="form-control col-xs-12" rows="10" name="content" ></textarea>
                <?php echo isset($errorContent) ? $errorContent: "";?>
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