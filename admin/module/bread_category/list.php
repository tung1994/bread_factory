<style type="text/css">
    #a{
        width: 220px;
        float: right;
    }
</style>
<div id="wrapper">
    <div id="page-wrapper">
    <meta charset="utf-8"/>
    <h1>Trang Bread_Category</h1><br />
    
    <div class="form">
    <div class="input-group">
        <input type="text" class="form-control" id="a" placeholder="tìm kiếm" />
        <span class="input-group-btn">
            <button id="button" class="btn btn-default" type="button">Search</button>
        </span>
    </div>
    </div>
    <br />
    
    <?php 
        $num_rec_per_page=2;
        if (isset($_GET["page"])) 
        {
            $page  = $_GET["page"]; 
        } else { 
            $page=1; 
        } 
        $start_from = ($page-1) * $num_rec_per_page; 
        $sql = "SELECT * FROM bread_category LIMIT ".$start_from.", ".$num_rec_per_page.""; 
        $rs_result = mysql_query($sql); 
    ?>
    
        <div class="table-responsive">   
            <table class="table table-bordered">
                <tr class="danger">
                    <th>Name</th>
                    <th>Image</th>
                    <th>Order</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                            
                    //$sqlCategory = "SELECT * FROM bread_category";
                    
                                
                    //$queryCategory = mysql_query($sqlCategory);
                                
                    while($rows = mysql_fetch_assoc($rs_result)){
                ?>
                <tr class="info">
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['image'] != null ? "<img src='images/".$rows['image']."' width='60'/>" : "";?></td>
                    <td><?php echo $rows['ord'];?></td>
                    <td><?php echo date('d-m-Y',strtotime($rows['created']));?></td>
                    <td><?php echo $rows['modified'];?></td> 
                    <td><?php echo $rows['status'];?></td>                  
                    <td>
                        <a href="index.php?module=bread_category&action=update&id=<?php echo $rows['category_id']; ?>" >Edit</a> |
                        <a href="index.php?module=bread_category&action=delete&id=<?php echo $rows['category_id']; ?>" onclick='return confirm("bạn có thực sự muốn xóa");'>Delete</a>    
                    </td>
                </tr>
                <?php } ?>
            </table>
            
            <?php 
                $sql = "SELECT * FROM bread_category"; 
                $rs_result = mysql_query($sql); //run the query
                $total_records = mysql_num_rows($rs_result);  //count number of records
                $total_pages = ceil($total_records / $num_rec_per_page); 
                
                echo "<a href='index.php?module=bread_category&page=1'>".'|<'."</a> "; // Goto 1st page  
                
                for ($i=1; $i<=$total_pages; $i++) { 
                            echo "<a href='index.php?module=bread_category&page=".$i."'>".$i."</a> "; 
                }; 
                echo "<a href='index.php?module=bread_category&page=".$total_pages."'>".'>|'."</a> "; // Goto last page
            ?>
            
            <br />
                <p>Thêm Category <a href="index.php?module=bread_category&action=insert" style="text-decoration: none; color: red;">tại đây</a></p>
        </div>
    </div>
</div>
 