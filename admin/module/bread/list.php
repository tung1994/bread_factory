<style type="text/css">
    #a{
        width: 220px;
        float: right;
    }
</style>
<div id="wrapper">
    <div id="page-wrapper">
    <meta charset="utf-8"/>
    <h1>Trang Bread</h1><br />
    
    <div class="form">
    <div class="input-group">
        <input type="text" class="form-control" id="a" placeholder="tìm kiếm" />
        <span class="input-group-btn">
            <button id="button" class="btn btn-default" type="button">Search</button>
        </span>
    </div>
    </div>
    <br />
    
        <div class="table-responsive">   
            <table class="table table-bordered">
                <tr class="info">
                    <th>Category_id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Order</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                            
                    $sqlBread = "SELECT * FROM bread";
                                
                    $queryBread = mysql_query($sqlBread);
                                
                    while($rows = mysql_fetch_assoc($queryBread)){
                ?>
                <tr class="success">
                    <td><?php echo $rows['category_id'];?></td>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['price'];?></td>
                    <td><?php echo $rows['ord'];?></td>
                    <td><?php echo $rows['created'];?></td>
                    <td><?php echo $rows['modified'];?></td>
                    <td><?php echo $rows['status'];?></td>
                    <td>
                        <a href="index.php?module=bread&action=update&id=<?php echo $rows['bread_id']; ?>" >Edit</a> |
                        <a href="index.php?module=bread&action=delete&id=<?php echo $rows['bread_id']; ?>" onclick='return confirm("bạn có thực sự muốn xóa");'>Delete</a>    
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br />
                <p>Thêm Bread <a href="index.php?module=bread&action=insert" style="text-decoration: none; color: red;">tại đây</a></p>
        </div>
    </div>
</div>
 