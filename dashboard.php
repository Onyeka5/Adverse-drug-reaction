<?php
session_start();
include_once('includes/config.php');
if (isset($_SESSION['aid']) && strlen($_SESSION['aid']) == 0) {
    header('location:logout.php');
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="adr.png"/>
    <title>Dashboard</title>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include_once('includes/sidebar.php'); ?>
        <!-- End of Sidebar -->
<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include_once('includes/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                    <!-- Content Row -->
                    <div class="row">
                        <?php
                        // Total
                        $query = mysqli_query($con, "select id from adrreport");
                        $totalreportings = mysqli_num_rows($query);

                        $query1 = mysqli_query($con, "select id from adrreport ");
                        $requestcompleted = mysqli_num_rows($query1);

                        $query11 = mysqli_query($con, "select id from adrreport");
                        $assignedrequests = mysqli_num_rows($query11);

                        $query2 = mysqli_query($con, "select id from adrreport");
                        $tonthewayreq = mysqli_num_rows($query2);

                        $query3 = mysqli_query($con, "select id from adrreport");
                        $frwprequests = mysqli_num_rows($query3);

                        $query4 = mysqli_query($con, "select id from adrreport ");
                        $newrequests = mysqli_num_rows($query4);
                        ?>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <a href="new-requests.php">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"> Total ADR Reports </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $newrequests; ?></div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-fire fa-2x text-gray"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <a href="all-requests.php">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Unassigned ADR Reports </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalreportings; ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-fire fa-2x text-red-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <a href="completed-requests.php">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> ADR Request Assigned </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "0"; ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-fire fa-2x text-red-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                                           </div>

                    <!-- Content Row -->
                     <!-- Chart Bar -->
                        <div class="col-xl-12 col-lg-12">
                            
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Reports Filled</h6>
                                </div>
                                </div>
                               <center> <p>Date and Time of Reaction and Number of ADR Reports submitted </p></center>
                                <div class="card-body">
                                    <div class="chart-bar">
                                   <canvas id="reportChart"></canvas>
                                    </div>
                                
                            </div>
                            
                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
           </div>

            <!-- Footer -->
            <?php include_once('includes/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include_once('includes/logout_modal.php'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sb-admin-2.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
   

    <!-- Report Chart Script -->
    
<script>
// Get the data from PHP variables
<?php $query = mysqli_query($con, "SELECT DateandTimeofthereaction, COUNT(*) as count FROM adrreport GROUP BY DateandTimeofthereaction");
// Initialize arrays to store data
$categories = [];
$count = [];

// Fetch data and store in arrays
while ($row = mysqli_fetch_assoc($query)) {
    $categories[] = $row['DateandTimeofthereaction'];
    $count[] = $row['count'];}
?>

var categories = <?php echo json_encode($categories); ?>;
var count = <?php echo json_encode($count); ?>;

// Create the chart
var ctx = document.getElementById('reportChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: categories,
        datasets: [{
            label: 'Submitted ADR Reports',
            data: count,
            backgroundColor: 'rgba(0, 0, 255, 0.66)',
            borderColor: 'rgba(0, 0, 255, 0.66)',
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                stepSize: 1
            }
        }
    }
});
</script>

</body>

</html>
<?php } ?>