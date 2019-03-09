<?php 
include_once('../layouts/header.php');
include_once('../db_connect.php');
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Products</li>
  </ol>

  <!-- Page Content -->
  <h1>PRODUCTS</h1>
  <hr>
  <a href="add.php" class="btn btn-primary">Add new product</a>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="tablesp" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th style="text-align: center;">Actions</th>
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
              <td><?php echo $row['price']; ?></td>
              <td  style="text-align: center;">
                
                <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-success">Detail</a> 
                <a href="update.php" class="btn btn-warning">Update</a>  
                <a href="delete.php" class="btn btn-danger">Delete</a>

              </td>
            </tr>
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    
                    <h2 class="modal-title">Thông tin khách hàng</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <ol>
                      <!-- <li>Mã khách hàng: <?php echo $row['makh']; ?></li>
                      <li>Tên khách hàng:<?php echo $row['tenkh']; ?></li>
                      <li>Số điện thoại:<?php echo $row['sdt']; ?></li>
                      <li>Email:<?php echo $row['email']; ?></li>
                      <li>Địa chỉ:<?php echo $row['diachi']; ?></li> -->
                    </ol>
                    
                    <div class="modal-footer">
                      
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                    
                  </div>
                </div>

              </div>
            </div>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript" src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#tablesp').DataTable();
  } );
</script>
<?php 
require_once('../layouts/footer.php');
?>