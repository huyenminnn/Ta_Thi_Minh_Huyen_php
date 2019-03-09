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
        <h2 align="center">CHI TIẾT SẢN PHẨM</h2>
        <p>Mã sản phẩm: <?php echo $data['code'] ?></p>
        <p>Tên sản phẩm: <?php echo $data['name'] ?></p>
        <p>Số lượng: <?php echo $data['quantity'] ?></p>
        <p>Đơn giá: <?php echo $data['price'] ?></p>
    </div>
</body>
</html>