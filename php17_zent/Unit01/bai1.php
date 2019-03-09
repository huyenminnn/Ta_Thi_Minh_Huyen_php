<?php 
	include_once('db_connect.php');
	$sql = "SELECT * FROM khach_hang";
	$result = $conn->query($sql);
 ?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Khách hàng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
        <a href="add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
              <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th style="text-align: center;">Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	while($row = $result->fetch_assoc()) { 
		  ?>
              <tr>
                <td><?php echo $row['makh']; ?></td>
                <td><?php echo $row['tenkh']; ?></td>
                <td><?php echo $row['sdt']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['diachi']; ?></td>
                <td  style="text-align: center;">
                    <a href="detail.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-success">Detail</a> 
                     <a href="update.php" class="btn btn-warning">Update</a>  
                    <a href="delete.php" class="btn btn-danger">Delete</a>

                </td>
              </tr>
              
                <?php } ?>
            </tbody>
          </table>
    </div>
</body>
</html>