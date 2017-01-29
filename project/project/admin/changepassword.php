<?php
	
	require 'connection.php';

	include 'checkstatus.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

  
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">

  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  	<?php

  		include 'navbar.php';
  	?>
    

    <div class="container-fluid">
      <div class="row">
        	<?php

		  		include 'sidebar.php';
		  	?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Change Password</h1>
            <?php

              if(isset($_SESSION['err'])){
                echo $_SESSION['err'];
                unset($_SESSION['err']);
              }

              if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }

            ?>

            <form method="post" action='act_changepassword.php'>
              <div class="form-group">
                <label >Old Password</label>
                <input type="password" name="Opwd"  class="form-control"  placeholder="Enter Old Pasword">
              </div>
              <div class="form-group">
                <label >New Password</label>
                <input type="password"  name="Npwd" class="form-control"  placeholder="Enter New Password">
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password"  name="Cpwd" class="form-control"  placeholder="Re-enter Password">
              </div>
            
              
              <button type="submit" name="changepwdbtn" class="btn btn-default">Update Password</button>
            </form>
       

         </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
