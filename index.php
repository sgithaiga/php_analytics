<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Report Portal</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<!--Load current total customers-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#total_cust").load('total_cust.php')
        }, 2000);
    });
  </script>
  <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#count_water").load('count_water.php')
        }, 2000);
    });
  </script>
  <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#count_sewer").load('count_sewer.php')
        }, 2000);
    });
  </script>
  <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#sum_water_loan_payment").load('sum_water_loan_payment.php')
        }, 2000);
    });
  </script>
  <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#sum_sewer_loan_payment").load('sum_sewer_loan_payment.php')
        }, 2000);
    });
  </script>
  <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#sum_water_payments").load('sum_water_payments.php')
        }, 2000);
    });
  </script>
  <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#total_consumption_actual").load('total_consumption_actual.php')
        }, 2000);
    });
  </script>
    <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#total_amount_billed").load('total_amount_billed.php')
        }, 2000);
    });
  </script>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Informal Settlements Region JISOMEE MITA REPORTS</a> 

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search 
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     <!-- <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>-->
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<i class="fas fa-fw fa-folder"></i>-->
          <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
          <span class="sr-only"></span><span>Reports</span>
          
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <!--<h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <div class="dropdown-divider"></div>-->
          <h6 class="dropdown-header">Other Pages:</h6> 
          <div class="list-group">
          <ul class="fa-ul">     
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="./account_balances/index.php">Account Balances</a></li>
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="./payments/index.php">Payments</a></li>
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="./anomalies/index.php">Anomalies</a></li>
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="./billing_rpt/index.php">Billing Report</a></li>  
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="./readings/index.php">Readings Report</a></li>   
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="./meter_history/index.php">Meter History</a></li>   
          <!-- <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="#">Finance Report</a></li>   
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="#">Finance Report</a></li>   
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="#">Finance Report</a></li>   
          <li><i class="fa-li fa fa-square"></i><a class="dropdown-item" href="#">Finance Report</a></li>   -->
          
          
          
          <!--
          <a class="dropdown-item" href="blank.html">Customer Care Report</a>
          <a class="dropdown-item" href="blank.html">CMS->Jisomee Debt transfer</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>-->
          </ul>
        </div>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <i class="fas fa-home"></i>
              <a href="../std_rollovers.php">Back home</a>
            </li>

         <!--<li class="breadcrumb-item">
             
            <a href="#">Dashboard</a>
          </li>--> 
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <!---->
                <div class="card-body-icon">
                  <i class="fas fa-users-cog"></i>
                </div>
                <div class="mr-5">Total customers enrolled</div>
                
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">
                  <div id="total_cust"></div>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-water"></i>
                </div>
                <div class="mr-5">Total water connections</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">
                <div id="count_water"></div>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-secondary  o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-link"></i>
                </div>
                <div class="mr-5">Total sewer connections</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">
                <div id="count_sewer"></div>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-hand-holding-usd"></i>
                </div>
                <div class="mr-5">Total water loan repayments (Ksh)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">
                <div id="sum_water_loan_payment"></div>
                </span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="mr-5">Total sewer loan repayments (Ksh)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">
                <div id="sum_sewer_loan_payment"></div>
                </span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white badge-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list-ol"></i>
                </div>
                <div class="mr-5">Total water payments (Ksh)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">
                <div id="sum_water_payments"></div>
                </span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark  o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-tint"></i>
                </div>
                <div class="mr-5">Total consumption billed (m3)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">
                <div id="total_consumption_actual"></div>
                </span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-coins"></i>
                </div>
                <div class="mr-5">Total amount billed (Ksh)</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">
                <div id="total_amount_billed"></div>
                </span>
                </span>
              </a>
            </div>
          </div>





        </div>

        <!-- Area Chart Example-->
        <!--
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>-->

        <!-- DataTables  -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Customer Mobile Payments</div>
          <div class="card-body">
            <div class="table-responsive">
           <?php include('tables.php'); ?>   
         </div>
          </div>
          <div class="card-footer small text-muted">Updated at <?php echo date("D M d, Y G:i a"); ?></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © NCWSC <?php echo date("Y"); ?> </span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <!--<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  $('#payment_rpt').DataTable({
   "processing" : true,
   "serverSide" : true,
   "ajax" : {
    url:"ajaxfile.php",
    type:"POST"
   },
   dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf', 'copy', 'print'
   ],
   "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ]
  });
  
 });
 
</script>-->


</body>

</html>
