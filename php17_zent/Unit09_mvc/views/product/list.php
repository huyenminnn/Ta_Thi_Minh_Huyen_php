
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="?mod=product&act=add" class="btn btn-primary">Thêm mới</a>
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
                <th>Loại sản phẩm</th>
                <th>Đơn giá</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	foreach ($data as $row){ 
		  ?>
              <tr>
                <td><?php echo $row['code']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo number_format($row['price']); ?></td>
                <td>
                    <a href="?mod=product&act=detail&code=<?php echo $row['code']; ?>" class="btn btn-success">Detail</a> 
                     <a href="?mod=product&act=edit&code=<?php echo $row['code']; ?>" class="btn btn-warning">Update</a>  
                    <a href="?mod=product&act=delete&code=<?php echo $row['code']; ?>" class="btn btn-danger">Delete</a>

                </td>
              </tr>
              
                <?php } ?>
            </tbody>
          </table>
    </div>
</body>
</html>