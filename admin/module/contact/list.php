<style type="text/css">
    #a{
        width: 220px;
        float: right;
    }
</style>
<div id="wrapper">
    <div id="page-wrapper">
    <meta charset="utf-8"/>
    <h1>Trang Contact</h1><br />
    
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
                <tr class="danger">
                    <th>Address</th>
                    <th>Phone_Number</th>
                    <th>Fax</th>
                    <th>Email</th>
                    <th>Hotline</th>
                    <th>Action</th>
                </tr>
                <?php
                            
                    $sqlContact = "SELECT * FROM contact";
                                
                    $queryContact = mysql_query($sqlContact);
                                
                    while($rows = mysql_fetch_assoc($queryContact)){
                ?>
                <tr class="info">
                    <td><?php echo $rows['address'];?></td>
                    <td><?php echo $rows['phone_number'];?></td>
                    <td><?php echo $rows['fax'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['hotline'];?></td>                    
                    <td>
                        <a href="index.php?module=contact&action=update&id=<?php echo $rows['contact_id']; ?>" >Edit</a> |
                        <a href="index.php?module=contact&action=delete&id=<?php echo $rows['contact_id']; ?>" onclick='return confirm("bạn có thực sự muốn xóa");'>Delete</a>    
                    </td>
                </tr>
                <?php } ?>
            </table>
            <br />
                <p>Thêm Contact <a href="index.php?module=contact&action=insert" style="text-decoration: none; color: red;">tại đây</a></p>
        </div>
    </div>
</div>
 