<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">CẬP NHẬT THÔNG TIN SẢN PHẨM</h3>
    <?php 
        if (isset($_COOKIE['msg'])) {
    ?>
    <div class="alert alert-danger">
  <strong>Danger!</strong> <?php echo $_COOKIE['msg']; ?>
</div>
    <?php        
        }
     ?>
    <hr>
        <form action="?mod=product&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Mã sản phẩm" name="code" value="<?= $data['code']?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" value="<?= $data['name']?>">
            </div>  
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số lượng" name="quantity" value="<?= $data['quantity']?>">
            </div>
            <div class="form-group">
                <label for="">Giá nhập</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào giá nhập hàng" name="price" value="<?= $data['price']?>">
            </div>
            <div class="form-group">
                <label for="">Loại sản phẩm</label>
                <select class="form-control" name="category">
                    <?php 
                        foreach ($category as $row) { ?>
                            <option value="<?=$row['code'] ?>" <?php if($row['code']==$data['code']) echo  "selected" ?>><?=$row['name'] ?></option>
                    <?php    }
                     ?>
                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>