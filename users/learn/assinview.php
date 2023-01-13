<?php
session_start();
include "session_st.php";
include"../../connect.php";


if (!isset($_SESSION['passi'])){
  header("location:../../login.php");
  exit();
} 

if(!isset($_SESSION['cur_user'])){
  $_SESSION['cur_user'] = $_SERVER['REMOTE_ADDR'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <link rel="icon" href="img/faviconn.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Answered Question</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../w3.css">
  <link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <!-- Livechat for this template-->
  <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="bootstrap4/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/chat_style.css" /> 
  <script src="js/jquery-3.3.1.js"></script>
  <script src="bootstrap4/js/bootstrap.js"></script>
  <script src="js/main.js"></script> -->
  <!-- Livechat end-->


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "connect/head.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
         

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <?php include "connect/nav.php"; ?>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Assingment Score</h1>
            
          </div>

          <!-- Content Row -->
        

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            

            <!-- Pie Chart -->
			
			
            
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Assignment Score</h6>
                  <div class="dropdown no-arrow">
                   
                   
                  </div>
                </div>
                <!-- Card Body -->
    <div class="row container">
						
    <div class="col-md-9 " style="overflow-x: auto;">
        <table class="table table-striped table-bordered table-hover" 
      id="dataTables-example" style="width:100%;">
    
    <thead>
       <tr>
       <th>Title</th>
       <th>Fullname</th>
       <th>Question</th>
       <th>Answer</th>
	    
                
   </tr>
</thead>
<tbody>
<!-- php here -->
<?php
    if(!isset($_GET['id'])){
	echo "sorry";	
	}
	
	else{
    $geti=$_GET['id'];
    $queryo=mysqli_query($con,"select * from que_st where id = '".$geti."' ");
    while($row = mysqli_fetch_object($queryo)){    
    ?>

   <tr class="">    
                  <td><?php echo $row->title; ?></td>
                  <td><?php echo $row->fullname; ?></td>
                  <td><?php echo $row->question; ?></td>                 
                  <td><?php echo $row->ans; ?></td>
				          
                   
                   
                </tr>
               <?php  }} ?>

      </tbody>
    </table>
				 
	</div>
				 

				 
				  
				  
			  
                 
                
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            

          
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "connect/foot.php"; ?>
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
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script src="../../adm/s/js/dataTables/jquery.dataTables.js"></script>
  <script src="../../adm/s/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

  <!-- Page level plugins -->
  

  <!-- Page level custom scripts -->
  
  <!-- Livechat for this template-->
    <?php
 //       include_once('foot.php');
    ?>
 <!-- Livechat end -->


</body>

</html>
