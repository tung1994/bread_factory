<div id="wrapper">
    <div id="page-wrapper">
<?php
	$title = $content  = $author = $date  = $dated = $status = "";
	if(isset($_POST['ok'])) {

		if($_POST['title'] == ""){
			$errorTitle = "vui lòng nhập tiêu đề";
		} else {
			$title = $_POST['title'];
		}
        
        if($_POST['content'] == ""){
			$errorContent = "vui lòng nhập nội dung";
		} else {
			$content = $_POST['content'];
		}


		if($_POST['author'] == ""){
			$errorAuthor = "Vui lòng nhập tên tác giả";
		}else{
            $author = $_POST['author'];
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
		
	    if($title && $content && $author && $date  && $dated && $status) {

			$list = "select * from blog where title = '".$title."' and content = '".$content."'";
			$listTitle = mysql_query($list);
            if(mysql_num_rows($listTitle) > 0){
			 	$error = "blog này đã tồn tại";
		    }else {

    			 $sql =  "Insert into blog(`title`, `content`, `author`, `created`,`modified`,`status`) values('".$title."','".$content."','".$author."','".$date."','".$dated."','".$status."')";                 
    			 mysql_query($sql);
    			 header("location:index.php?module=blog");
            }
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Insert Blog</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
            <div class="form-group">
                <label class="control-label col-xs-2">Title</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="title" placeholder="title" />
                <?php echo isset($errorTitle) ? $errorTitle: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Content</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="content" placeholder="content"/>
                <?php echo isset($errorContent) ? $errorContent: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Author</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="author" placeholder="author"/>
                <?php echo isset($errorAuthor) ? $errorAuthor: "";?>
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