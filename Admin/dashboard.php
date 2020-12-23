<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 $sql = "SELECT max(request_id) FROM submitrequest_tb";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submitrequest = $row[0];

 $sql = "SELECT max(request_id) FROM assignwork_tb";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $assignwork = $row[0];

 $sql = "SELECT * FROM technician_tb";
 $result = $conn->query($sql);
 $totaltech = $result->num_rows;

?>
<div class="page-content p-5 shadow-sm px-4" id="content">
    <div class="row mx-5 text-center">
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Orders Received</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $submitrequest; ?>
                    </h4>
                    <a class="btn text-white" href="request.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Total Revenue</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $assignwork; ?>
                    </h4>
                    <a class="btn text-white" href="work.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">No. of Employee</div>
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $totaltech; ?>
                    </h4>
                    <a class="btn text-white" href="technician.php">View</a>
                </div>
            </div>
        </div>
    </div>
    <canvas id="myChart" width="400" height="400"></canvas>
</div>
    <?php
include('includes/footer.php'); 
?>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>

        <script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>