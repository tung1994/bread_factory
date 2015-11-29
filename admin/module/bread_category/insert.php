<div id="wrapper">
    <div id="page-wrapper">
<?php
	$name = $order = $date  = $dated = $status = "";
	if(isset($_POST['ok'])) {

		if($_POST['name'] == ""){
			$errorName = "vui lòng nhập tên category";
		} else {
			$name = $_POST['name'];
		}


		if($_POST['order'] == ""){
			$errorOrder = "Vui lòng nhập số lượng";
		}else{
            $order = $_POST['order'];
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
		
	    if($name && $order && $date  && $dated && $status) {
		
            if (isset($_FILES['image']))
            {
                if ($_FILES['image']['error'] > 0)
                {
                    echo 'File Upload Bị Lỗi';
                }
                else{
                    move_uploaded_file($_FILES['image']['tmp_name'], './images/'.$_FILES['image']['name']);
                    echo 'File Uploaded';
                }
            }else{
                echo 'Bạn chưa chọn file upload';
            }
            
            $sql =  "Insert into bread_category(`name`,`image`, `ord`, `created`,`modified`,`status`) values('".$name."','".$_FILES['image']['name']."','".$order."','".$date."','".$dated."','".$status."')";                 
            mysql_query($sql);
            header("location:index.php?module=bread_category");
            
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Insert Bread_Category</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        
            <div class="form-group">
                <label class="control-label col-xs-2">Name</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="name" placeholder="name" />
                <?php echo isset($errorName) ? $errorName: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Image</label>
            <div class="col-xs-10">
                <input type="file" class="form-control" name="image" placeholder="image"/>
                
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Order</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="order" placeholder="order"/>
                <?php echo isset($errorOrder) ? $errorOrder: "";?>
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
                
            </div>
            </div>   
        </form>
        </div></div></div></div>
    </div>
</div>