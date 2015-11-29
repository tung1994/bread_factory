<div id="wrapper">
    <div id="page-wrapper">
<?php
    $id = $_GET['id'];
    $sql = "select * from about where about_id = '".$id."'";
    $query = mysql_query($sql);
    $select = mysql_fetch_array($query);

	$content = $date  = $dated = $status = "";
	if(isset($_POST['ok'])) {

       /* if($_POST['content'] == ""){
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
		}*/
		
	    //if($content && $date  && $dated && $status) {

			$sqlUpdate = 	"UPDATE about
								SET content = '".$_POST['content']."',
									created  = '".$_POST['date']."',
                                    modified = '".$_POST['dated']."',
									status   = '".$_POST['status']."'
							WHERE about_id = '".$id."' ";
                            
            mysql_query($sqlUpdate);
			header("location:index.php?module=about");
		//}					
	}
?>

<meta charset="utf-8"/>
<h1>Trang Update About</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
        
            <div class="form-group">
                <label class="control-label col-xs-2">Content</label>
            <div class="col-xs-10">
                <textarea class="form-control col-xs-12" name="content" rows="10" cols="60"><?php echo $select['content'];?></textarea>
                <?php echo isset($errorContent) ? $errorContent: "";?>
            </div>
            </div>    
            
            <div class="form-group">
                <label class="control-label col-xs-2">Created</label>
            <div class="col-xs-10">
                <input type="datetime" class="form-control" name="date" value="<?php echo $select['created'];?>" placeholder="created"/>
                <?php echo isset($errorDate) ? $errorDate: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Modified</label>
            <div class="col-xs-10">
                <input type="datetime" class="form-control" name="dated" value="<?php echo $select['modified'];?>" placeholder="Modified"/>
                <?php echo isset($errorDated) ? $errorDated: "";?>
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