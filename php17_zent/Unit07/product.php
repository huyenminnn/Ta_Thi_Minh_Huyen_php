<?php 
	include_once('db_connect.php');
	$sql = "SELECT * FROM products";
	$result = $conn->query($sql);
 ?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="product_add.php" class="btn btn-primary">Thêm mới</a>
        <?php 
        if (isset($_COOKIE['msg'])) {
    ?>
    <div class="alert alert-success">
  <strong>Success!</strong> <?php echo $_COOKIE['msg']; ?>
</div>
    <?php        
        }
        if (isset($_COOKIE['msg_fail'])) {
            ?>
    <div class="alert alert-danger">
  <strong>Danger!</strong> <?php echo $_COOKIE['msg_fail']; ?>
</div>
    <?php   
        }
     ?>
        <table class="table">
            <thead>
              <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	while($row = $result->fetch_assoc()) { 
		  ?>
              <tr>
                <td><?php echo $row['code']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo number_format($row['price']); ?></td>
                <td>
                    <a href="detail.php?code=<?php echo $row['code']; ?>" class="btn btn-success">Detail</a> 
                     <a href="product_edit.php?code=<?php echo $row['code']; ?>" class="btn btn-warning">Update</a>  
                    <a href="product_delete.php?code=<?php echo $row['code']; ?>" class="btn btn-danger">Delete</a>

                </td>
              </tr>
              
                <?php } ?>
            </tbody>
          </table>
    </div>
</body>
</html>