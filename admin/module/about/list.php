<style type="text/css">
    #a{
        width: 220px;
        float: right;
    }
</style>
<div id="wrapper">
    <div id="page-wrapper">
        <meta charset="utf-8"/>
    
    <h1>Trang About</h1><br />
    
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
                <tr class="success">
                    <th>Content</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                            
                    $sqlAbout = "SELECT * FROM about";
                                
                    $queryAbout = mysql_query($sqlAbout);
                                
                    while($rows = mysql_fetch_assoc($queryAbout)){
                ?>
                <tr class="danger">
                    <td><?php echo substr($rows['content'],0,54);?>...</td>
                    <td><?php echo $rows['created'];?></td>
                    <td><?php echo $rows['modified'];?></td>
                    <td><?php echo $rows['status'];?></td>
                    <td>
                        <a href="index.php?module=about&action=update&id=<?php echo $rows['about_id']; ?>" >Edit</a> |
                        <a href="index.php?module=about&action=delete&id=<?php echo $rows['about_id']; ?>" onclick='return confirm("bạn có thực sự muốn xóa");'>Delete</a>    
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br />
                <p>Thêm About <a href="index.php?module=about&action=insert" style="text-decoration: none; color: red;">tại đây</a></p>
        </div>       
    </div>
</div>