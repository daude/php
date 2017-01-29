<?php
	
	require 'connection.php';

	include 'checkstatus.php';

  if(isset($_GET['eid'])){
    $id=$_GET['eid'];
    $query=$link->query("SELECT * FROM tbl_news where id='$id'");
    $row=$query->fetch_array();
  }else{
    header('location:news.php');
  }

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
          <h1 class="page-header">Add News</h1>
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

            <form method="post" action="act_editnews.php" enctype='multipart/form-data'>
              <input type="hidden" name="hid" value="<?php echo $row['id'];?>">
              <div class="form-group">
                <label>News Title</label>
                <input type="text" class="form-control" name="ntitle" value="<?php echo $row['title'];?>">
              </div>

              <div class="form-group">
                <label>News Description</label>
                <textarea rows=8 class="form-control" name="ndesc"><?php echo $row['description'];?>
                </textarea>
              </div>

              <div class="form-group">
                <label>News Author</label>
                <input type="text" class="form-control" name="nauthor" value="<?php echo $row['author'];?>">
              </div>

              <div class="form-group">
                <label>News Image</label><br/>
                <img src="../img/<?php echo $row['image'];?>" width=80><br/><br/>
                <input type="file" name="nimage">
              </div>


              <div class="form-group">
                <label>News Date</label>
                <input type="date" class="form-control" name="ndate" placeholder="yyyy-mm-dd" value="<?php echo $row['date'];?>">
              </div>

              <div class="form-group">
                <label>News Status</label><br/>
                <input type="radio" name='nstatus' value="yes" <?php echo ($row['status']=="yes")?"checked":"";?>> Show
                 <input type="radio" name='nstatus' value="no" <?php echo ($row['status']=="no")?"checked":"";?>> Hide
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <input type="submit" name="nupdbtn" value="Update News" class="btn btn-primary"> 
              </div>




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
