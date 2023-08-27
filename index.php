<!--connecting to the databse-->
<?php include_once('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adverse Drug Reaction Reporting system</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="adr.png" />
        <!-- Core theme CSS (includes Bootstrap)-- courtsey github.com-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
<?php include_once('includes/header.php') ?>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="adreport.png" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light"> Reporting of Adverse Drug Reaction</h1>
                    <p>Notice any unusual drug symptoms please fill out the reporting page</p>
                    <a class="btn btn-primary" href="reporting.php">File a Report Now</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Drug safety is the set of practices intended to reduce the destruction caused by Drugs. Drug safety measures include those that file the Adverse Drug reaction report on time.</p></div>
            </div>
            <!-- Content Row-->
     
        </div>
        <!-- Footer-->
<?php include_once('includes/footer.php') ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
