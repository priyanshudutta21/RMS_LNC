<?php    
define('TITLE', 'Update Product');
define('PAGE', 'assets');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['pupdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['pqty'] == "") ||  ($_REQUEST['ptable'] == "") ||  ($_REQUEST['peach'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $pid = $_REQUEST['pid'];
    $pname = $_REQUEST['pname'];
    $pdop = $_REQUEST['pdop'];
    $ptable = $_REQUEST['ptable'];
    $peach = $_REQUEST['peach'];
    $pqty = $_REQUEST['pqty'];
    $psum = $_REQUEST['ptotalcost'];
  $sql = "UPDATE orders_tb SET pname = '$pname', pdop = '$pdop', tableno = '$ptable', psellingcost = '$peach',  pqty = '$pqty',  psum = '$psum' WHERE pid = '$pid'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
<div class="page-content p-5 mt-5" id="content">
  <h3 class="text-center">Update Product Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
$sql = "SELECT * FROM orders_tb WHERE pid = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pid">Product ID</label>
      <input type="text" class="form-control" id="pid" name="pid" value="<?php if(isset($row['pid'])) {echo $row['pid']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="pname">Name</label>
      <input type="text" class="form-control" id="pname" name="pname" value="<?php if(isset($row['pname'])) {echo $row['pname']; }?>">
    </div>
    <div class="form-group">
      <label for="pdop">DOP</label>
      <input type="date" class="form-control" id="pdop" name="pdop" value="<?php if(isset($row['pdop'])) {echo $row['pdop']; }?>">
    </div>
    <div class="form-group">
      <label for="pava">Quantity</label>
      <input type="number" class="form-control" id="pqty" name="pqty" value="<?php if(isset($row['pqty'])) {echo $row['pqty']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="ptable">Table NO</label>
      <input type="number" class="form-control" id="ptable" name="ptable" value="<?php if(isset($row['tableno'])) {echo $row['tableno']; }?>">
    </div>
    <div class="form-group">
      <label for="peach">Price Each</label>
      <input type="text" class="form-control" id="peach" name="peach" value="<?php if(isset($row['psellingcost'])) {echo $row['psellingcost']; }?>">
    </div>
    <div class="form-group">
      <label for="psellingcost">TOTAL PRICE</label>
      <input type=text class="form-control" id="ptotalcost" name="ptotalcost"  readonly="readonly" >
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="pupdate" name="pupdate">Update</button>
      <a href="orders.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>
<!-- Only Number for input fields -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>

<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }

  // sum
  $(function(){
            $('#peach, #pqty').keyup(function(){
               var value1 = parseFloat($('#peach').val()) || 0;
               var value2 = parseFloat($('#pqty').val()) || 0;
               $('#ptotalcost').val(value1 * value2);
            });
         });
</script>
<?php
include('includes/footer.php'); 
?>