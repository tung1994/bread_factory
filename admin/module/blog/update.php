<div id="wrapper">
    <div id="page-wrapper">
<?php
    $id = $_GET['id'];
    $sql = "select * from blog where blog_id = '".$id."'";
    $query = mysql_query($sql);
    $select = mysql_fetch_array($query);

	$title = $content  = $author = $date  = $dated = $status = "";
	if(isset($_POST['ok'])) {

		if($_POST['title'] == ""){
			$errorTitle = "vui lòng nh?p tiêu d?";
		} else {
			$title = $_POST['title'];
		}
        
        if($_POST['content'] == ""){
			$errorContent = "vui lòng nh?p n?i dung";
		} else {
			$content = $_POST['content'];
		}


		if($_POST['author'] == ""){
			$errorAuthor = "Vui lòng nh?p tên tác gi?";
		}else{
            $author = $_POST['author'];
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
		
	    if($title && $content && $author && $date  && $dated && $status) {

			$sqlUpdate = 	"UPDATE blog 
								SET title = '".$title."',
                                    content = '".$content."',
									author = '".$author."',
									created  = '".$date."',
                                    modified = '".$dated."',
									status   = '".$status."'
							WHERE blog_id = '".$id."' ";
                            
            mysql_query($sqlUpdate);
			header("location:index.php?module=blog");
		}					
	}
?>

<meta charset="utf-8"/>
<h1>Trang Update Blog</h1><br />
   
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
            <div class="form-group">
                <label class="control-label col-xs-2">Title</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="title" value="<?php echo $select['title'];?>" placeholder="title" />
                <?php echo isset($errorTitle) ? $errorTitle: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Content</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="content" value="<?php echo $select['content'];?>" placeholder="content"/>
                <?php echo isset($errorContent) ? $errorContent: "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Author</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="author" value="<?php echo $select['author'];?>" placeholder="author"/>
                <?php echo isset($errorAuthor) ? $errorAuthor: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Created</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="date" value="<?php echo $select['created'];?>" placeholder="created"/>
                <?php echo isset($errorDate) ? $errorDate: "";?>
            </div>  
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Modified</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="dated" value="<?php echo $select['modified'];?>" placeholder="Modified"/>
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