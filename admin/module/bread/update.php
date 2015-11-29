<div id="wrapper">
    <div id="page-wrapper">
<?php
    $id = $_GET['id'];
    $sql = "select * from bread where bread_id = '".$id."'";
    $query = mysql_query($sql);
    $select = mysql_fetch_array($query);

	$category = $name  = $price = $date  = $dated = $order = $status = "";
    
	if(isset($_POST['ok'])) {

		if($_POST['name'] == ""){
			$errorName = "vui lòng nhập tên sản phẩm";
		} else {
			$name = $_POST['name'];
		}
        
        if($_POST['price'] == ""){
			$errorPrice = "vui lòng nhập giá sản phẩm";
		} else {
			$price = $_POST['price'];
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

        if($_POST['category'] == ""){
			$errorCategory = "vui lòng chọn category_id";
		} else {
			$category = $_POST['category'];
		}
        
        if($_POST['status'] == ""){
			$errorStatus = "vui lòng cập nhật trạng thái";
		} else {
			$status = $_POST['status'];
		}
		
	    if($name && $price && $category && $date  && $dated && $order && $status) {

            $sqlUpdate = "UPDATE bread 
								SET name        = '".$name."',
                                    price       = '".$price."',
									ord         = '".$order."',
                                    created     = '".$date."',
                                    modified    = '".$dated."',
									status      = '".$status."',
									category_id = '".$category."'
							WHERE bread_id = '".$id."' ";
                            
            mysql_query($sqlUpdate);
			header("location:index.php?module=bread");
            
		}		
			
	}
?>

<meta charset="utf-8"/>
<h1>Trang Update Bread</h1><br />
   
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">
        <form class="form-horizontal" action="" method="post" >
        
            <div class="form-group">
                    <label class="control-label col-xs-2">Category_id</label>
                <div class="col-xs-10" >
                    <select name="category" class="form-control">
            			<option value="">vui lòng chọn</option>
                        <?php
                            $sql = "select * from bread_category ";
                            $query = mysql_query($sql);
                            while($rows = mysql_fetch_assoc($query)){ 
                        ?>
                        <option value="<?php echo $rows['category_id']; ?>"><?php echo $rows['name']; ?></option>
                        <?php }?>
            		</select>
                    <?php echo isset($errorCategory) ? $errorCategory: "";?>
                </div>  
            </div>
        
            <div class="form-group">
                <label class="control-label col-xs-2">Name</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $select['name'];?>"/>
                <?php echo isset($errorName) ? $errorName : "";?>
            </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-xs-2">Price</label>
            <div class="col-xs-10">
                <input type="text" class="form-control" name="price" placeholder="price" value="<?php echo $select['price'];?>"/>
                <?php echo isset($errorPrice) ? $errorPrice: "";?>
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