<div id="wrapper">
    <div id="page-wrapper">
<?php
    $id = $_GET['id'];
    $sql = "select * from bread_category where category_id = '".$id."'";
    $query = mysql_query($sql);
    $select = mysql_fetch_array($query);

	$name = $order = $date  = $dated = $status = "";
	if(isset($_POST['ok'])) {
        $date = date("d-m-Y H:s:i");

		if($_POST['name'] == ""){
			$errorName = "vui lòng nh?p tên category";
		} else {
			$name = $_POST['name'];
		}


		if($_POST['order'] == ""){
			$errorOrder = "Vui lòng nh?p s? lu?ng";
		}else{
            $order = $_POST['order'];
		}
		

		if($_POST['date'] == ""){
			$errorDate = "vui lòng nh?p ngày l?p";
		} else {
			$date = $_POST['date'];
		}

		
		if($_POST['dated'] == ""){
			$errorDated = "vui lòng nh?p ngày s?a";
		} else {
			$dated = $_POST['dated'];
		}
        
        
        if($_POST['status'] == ""){
			$errorStatus = "vui lòng c?p nh?t tr?ng thái";
		} else {
			$status = $_POST['status'];
		}
		
	    if($name && $order && $date  && $dated && $status) {
		
            if (isset($_FILES['image']))
            {
                if ($_FILES['image']['error'] > 0)
                {
                    echo 'File Upload B? L?i';
                }
                else{
                    move_uploaded_file($_FILES['image']['tmp_name'], './images/'.$_FILES['image']['name']);
                    echo 'File Uploaded';
                }
            }else{
                echo 'B?n chua ch?n file upload';
            }
            
            $sqlUpdate = "UPDATE bread_category 
								SET name = '".$name."',
                                    image = '".$_FILES['image']['name']."',
									ord = '".$order."',
                                    modified = '".$dated."',
									status   = '".$status."',
									created    = '".$date."'
							WHERE category_id = '".$id."' ";
                            
            mysql_query($sqlUpdate);
            header("location:index.php?module=bread_category");
            
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Update Bread_Category</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
        
            <div class="form-group">
                <label class="control-label col-xs-2">Name</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $select['name'];?>"/>
                <?php echo isset($errorName) ? $errorName: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Image</label>
            <div class="col-xs-10">
                <input type="file" class="form-control" name="image" placeholder="image" value="<?php echo $select['image'];?>"/>
                
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Order</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="order" placeholder="order" value="<?php echo $select['ord'];?>"/>
                <?php echo isset($errorOrder) ? $errorOrder: "";?>
            </div>  
            </div>
            
            
            <div class="form-group">
                <label class="control-label col-xs-2">Created</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="date" placeholder="created" value="<?php echo $select['created'];?>"/>
                <?php echo isset($errorDate) ? $errorDate: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Modified</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="dated" placeholder="Modified" value="<?php echo $select['modified'];?>"/>
                <?php echo isset($errorDated) ? $errorDated: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Status</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="status" placeholder="Status" value="<?php echo $select['status'];?>"/>
                <?php echo isset($errorStatus) ? $errorStatus: "";?>
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