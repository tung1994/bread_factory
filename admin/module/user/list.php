<style type="text/css">
    #a{
        width: 220px;
        float: right;
    }
</style>
<div id="wrapper">
    <div id="page-wrapper">
    <meta charset="utf-8"/>
    <h1>Trang User</h1><br />
    
    <form action="" method="get" >
        <div class="form">
            <div class="input-group">
                <input type="text" class="form-control" name="search" id="a" placeholder="tìm kiếm" />
                <span class="input-group-btn">
                    <input id="button" class="btn btn-default" name="ok" type="submit" value="Search"/>
                </span>
            </div>
        </div>
    </form>
    <br />
    
    <?php
        if (isset($_REQUEST['ok'])) {
             
            $search = addslashes($_GET['search']);
            
            $query = "select * from user where username like '%$search%'"; 
            
            $sql = mysql_query($query);
 
            $num = mysql_num_rows($sql);
 
            if (empty($search)) {
                
                echo "Yeu cau nhap du lieu vao o trong";
                
            } else {
                
                if ($num > 0 && $search != "") {
 
                    echo "'".$num."' ket qua tra ve voi tu khoa <b>'".$search."'</b>";
                    
                    while ($row = mysql_fetch_assoc($sql)) {
                        $id = $row['user_id'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $fullname = $row['fullname'];
                        $level = $row['level'];
 
                        echo "<br /><h3>Ho ten: '".$username."' (id: '".$id."')</h3><br />Mat Khau: '".$password."'</br />Fullname: '".$fullname."'</br />Level: '".$level."'</br />";
                    }
                } else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>
    
        <div class="table-responsive">   
            <table class="table table-bordered">
                <tr class="danger">
                    <th>User name</th>
                    <th>FullName</th>
                    <th>Level</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                            
                    $sqlUser = "SELECT *,IF(level = 2,'Administrator','Member') as level FROM user";
                                
                    $queryUser = mysql_query($sqlUser);
                                
                    while($rows = mysql_fetch_assoc($queryUser)){
                ?>
                <tr class="success">
                    <td><?php echo $rows['username'];?></td>
                    <td><?php echo $rows['fullname'];?></td>
                    <td><?php echo $rows['level'];?></td>
                    <td><?php echo $rows['created'];?></td>
                    <td><?php echo $rows['modified'];?></td>
                    <td><?php echo $rows['status'];?></td>
                    <td>
                        <a href="index.php?module=user&action=update&id=<?php echo $rows['user_id']; ?>" >Edit</a> |
                        <a href="index.php?module=user&action=delete&id=<?php echo $rows['user_id']; ?>" onclick='return confirm("bạn có thực sự muốn xóa");'>Delete</a>    
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br />
                <p>Thêm user <a href="index.php?module=user&action=insert" style="text-decoration: none; color: red;">tại đây</a></p>
        </div>
    </div>
</div>
 