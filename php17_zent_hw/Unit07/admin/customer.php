<?php 
require_once('../layouts/header.php');
include_once('../db_connect.php');
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
?>
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Customers</li>
  </ol>

  <!-- Page Content -->
  <h1>CUSTOMERS</h1>
  <hr>
  <a href="customer_add.php" class="btn btn-primary">Add new customer</a>
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

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="tablekhach" width="100%" cellspacing="0">
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
              <td><?php echo $row['code']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['mobile']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td  style="text-align: center;">

                <a  class="btn btn-success btn-detail" data-id="<?= $row['code']?>">Detail</a> 
                <a href="customer_edit.php?code=<?php echo $row['code']; ?>" class="btn btn-warning">Update</a>  
                <a href="customer_delete.php?code=<?php echo $row['code']; ?>" class="btn btn-danger">Delete</a>

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
                    <ul id="detail">

                    </ul>
                    
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


<script>
  $(document).ready(function(){
    $(".btn-detail").click(function(){
        var code = $(this).attr("data-id");
         $.ajax({
          type: "GET",
          url: "customer_detail.php?code="+code,
          data:{

          },
          success: function(response)
          {
            $('#detail').html(response);
            $("#myModal").modal("show");
          },
          error: function (xhr, ajaxOptions, thrownError) {

          }
        });
       });
  })
</script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#tablekhach').DataTable();
  } );
</script>
<?php 
require_once('../layouts/footer.php');
?>