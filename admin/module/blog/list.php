<style type="text/css">
    #a{
        width: 220px;
        float: right;
    }
</style>
<div id="wrapper">
    <div id="page-wrapper">
        <meta charset="utf-8"/>
    
    <h1>Trang Blog</h1><br />
    
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
                    <th>Title</th>
                    <th>Content</th>
                    <th>Author</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                            
                    $sqlBlog = "SELECT * FROM blog";
                                
                    $queryBlog = mysql_query($sqlBlog);
                                
                    while($rows = mysql_fetch_assoc($queryBlog)){
                ?>
                <tr class="danger">
                    <td><?php echo $rows['title'];?></td>
                    <td><?php echo $rows['content'];?></td>
                    <td><?php echo $rows['author'];?></td>
                    <td><?php echo $rows['created'];?></td>
                    <td><?php echo $rows['modified'];?></td>
                    <td><?php echo $rows['status'];?></td>
                    <td>
                        <a href="index.php?module=blog&action=update&id=<?php echo $rows['blog_id']; ?>" >Edit</a> |
                        <a href="index.php?module=blog&action=delete&id=<?php echo $rows['blog_id']; ?>" onclick='return confirm("bạn có thực sự muốn xóa");'>Delete</a>    
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br />
                <p>Thêm Blog <a href="index.php?module=blog&action=insert" style="text-decoration: none; color: red;">tại đây</a></p>
        </div>       
    </div>
</div>