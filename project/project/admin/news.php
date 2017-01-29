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
          <h1 class="page-header">News</h1>
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

            <table class='table'>
                <thead>
                  <tr>
                    <th>S.N</th>
                    <th>News Title</th>
                    <th>News Description</th>
                    <th>News Image</th>
                    <th>News Author</th>
                    <th>News Date</th>
                    <th>News Status</th>
                    <th>Changes</th>
                  </tr>

                </thead>


                <tbody>
                  <?php


                    $sel="SELECT * FROM tbl_news order by date desc";
                    if($query=$link->query($sel)){
                      $i=1;
                      while($row=$query->fetch_array()){


                  ?>
                  <tr>

                    <td><?= $i++;?></td>
                    <td><?= $row['title'];?></td>
                    <td><?= substr($row['description'],0,50);?></td>
                    <td><img src="../img/<?= $row['image'];?>" width=80></td>
                    <td><?= $row['author'];?></td>
                    <td><?= $row['date'];?></td>
                    <td><?= $row['status'];?></td>
                    <td>
                      <div class='btn-group'>
                        <a href="editnews.php?eid=<?php echo $row['id'];?>" class="btn btn-success btn-sm">
                         <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="deletenews.php?did=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">
                         <i class="glyphicon glyphicon-trash"></i>
                        </a>
                      </div>
                    </td>
                  </tr>


                  <?php

                      }
                    }
                  ?>

                </tbody>

            </table>
 

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
