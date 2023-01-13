<?php
session_start();
include "session_a.php";
include"../../connect.php";


if (!isset($_SESSION['passiw'])){
  header("location:../index.php");
  exit();
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <link rel="icon" href="img/logo-01.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Uplaod Text writeup - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../w3.css">
  <link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../users/learn/css/main.css">
  <link href="../../users/learn/font-awesome/css/font-awesome.css" rel="stylesheet" />
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "connect1/head.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
         

          <!-- Topbar Search -->
          <?php include "connect1/nav.php"; ?>
          

          <!-- Topbar Navbar -->
         

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Uplaod Text file</h1>
            
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->

          

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            

<div class="col-md-3"></div>

<div class="col-md-6">
<p style="font-size: 1.0rem;"><b>Please Note that you can use this account to upload <span style="color:#4e73df"><?php echo $stage;?></span> Text tutorials only.</b></p>
<br>

<?php
             
                 if (isset($_POST['crt'])){
           
           //form validation to avoid exploit
function test_input($data) {
         $data = trim($data);
       $data = stripslashes($data);
     $data = htmlspecialchars($data);
    return $data;
}
//exploit ends
       $ra=mt_rand(99,999999999);
	   $gen=md5($ra);
      $top=test_input($_POST["topic"]);
      $body=test_input($_POST["body"]);
      //$code=test_input($_POST["code"]);
	  //$qq=test_input($_POST["quizque"]);
	  //$qa=test_input($_POST["quians"]);
	  
	  /* $old_array=array("<?php","?>","<html>","</html>","<body>","</body>");
	   $new_array=array("&lt;?php","?&gt;","&lt;html&gt;","&lt;/html&gt;","&lt;body&gt;","&lt;/body&gt;");
	   $sensor=str_ireplace($old_array,$new_array,$code);*/
	  
	  $check2=mysqli_query($con,"select * from text_tutor where topic LIKE '%".mysqli_real_escape_string($con,$top)."%' ");

    $row2=mysqli_num_rows($check2);
    
if($row2 > 0 ){
         echo"<script>alert('There is a similar topic like the this.. Do change it')</script>";
         
    }
	else{
	
$senddata2 = mysqli_query($con,"insert into text_tutor (level,topic,body,uniqlearn) values
    ('".mysqli_real_escape_string($con,$stage)."','".mysqli_real_escape_string($con,$top)."','".mysqli_real_escape_string($con,$body)."','".$gen."')")or die(mysqli_error($con));

/*$senddata3 = mysqli_query($con,"insert into quiz_ (level,question,answer,uniqlearn) values
    ('".mysqli_real_escape_string($con,$stage)."','".mysqli_real_escape_string($con,$qq)."','".mysqli_real_escape_string($con,$qa)."',
	'".$gen."')")or die(mysqli_error($con));*/		
	}
	
	if(@$senddata2 /*AND @$senddata3*/){
	echo"<script>alert('Text successfully added for $stage')</script>";	
	}
	else{
		echo"<script>alert('An error occured')</script>";
	}
				 }
	  
	  ?>

 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="user">
          
                    

                   <div class="form-group">
                      <input type="text" class="form-control form-control" name="topic" placeholder="Topic..." required="">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="body" rows=4 placeholder="Body (Some notes)..." required=""></textarea>
                    </div>
					
                     
                    <button class="btn btn-primary btn-user" name="crt"><b>
                      Upload Text Document</b>
                    </button>
                    <hr>
                  
                   
                  </form>
          
          </div>
		  </div>
		  <br></br>
		  <div class="row">
		  
		  <div class="col-md-2">
		  </div>
		  
		  <div class="col-md-9 table">
		  
		  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    
    <thead>
       <tr>
	    
       <th>Topic</th>
       <th>Body</th>
       <th>Action</th>
	  
                
   </tr>
</thead>
<tbody>
<!-- php here -->
    <?php
           
            

           $mysqli1="select * from  text_tutor where level='$stage'  ";
  $myquery1=mysqli_query($con,$mysqli1) or die(mysqli_error($con));
  
    while($row2 = mysqli_fetch_object($myquery1)){

   ?>
   <tr class="" style="color: #444;">  
  
                  <td><a href="edittext.php?id=<?php echo $row2->id; ?>"><?php echo $row2->topic; ?></a></td>
                  <td><?php echo $row2->body; ?></td>
                  
                   <td><a onclick="return confirm('Are you sure you want to delete?')" href="deletetext.php?id=<?php echo $row2->id; ?>"><span class="fa fa-trash"></span></a></td>
                   
                </tr>
               <?php  } ?>

      </tbody>
    </table>
		  
		  </div>
		  
		  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "connect1/foot.php"; ?>
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
  
  <script src="js/dataTables/jquery.dataTables.js"></script>
  <script src="js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

  
  <!-- Page level plugins -->
  

  <!-- Page level custom scripts -->
  

</body>



</html>
