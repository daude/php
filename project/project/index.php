<?php
	include 'admin/connection.php';

?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<div>
		
		<div class="navbar navbar-default">
			<div class="container">
			<ul class="navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">News</a></li>
				<li><a href="#">Contact</a></li>

			</ul>
			</div>
		</div>


	</div>


	<div class="page-news">

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
					<h1>Latest News</h1>
					<hr/>


					<section class="news-list">
						
						<?php
							if(isset($_GET['ndate'])){
								$date=strtotime($_GET['ndate']);
								
								
								$month=date('m',$date);
								$year=date('Y',$date);

								$newsblocksel="SELECT * FROM tbl_news where Month(date) = '$month' AND YEAR(date)='$year'";
							
							}else if(isset($_GET['nauthor'])){
								$newsblocksel="SELECT * FROM tbl_news where author='".$_GET['nauthor']."'";
							}
							else if(isset($_GET['q'])){
								$search=$_GET['q'];
								$newsblocksel="SELECT * FROM tbl_news where title like '%$search' OR description like '%$search%' OR author like '%$search%'";
							}
							else{
							$newsblocksel="SELECT * FROM tbl_news where status='yes' order by date desc limit 2";
							}
							$query=$link->query($newsblocksel);
							while($newsrow=$query->fetch_array()){
						?>
						<div class="news-block">

							<h1><?php echo $newsrow['title'];?></h1>
							<p>
								<?php

									$newsdate=date_create($newsrow['date']);
									echo date_format($newsdate,'F d, Y');
								?>
								by <a href="index.php?nauthor=<?php echo $newsrow['author'];?>"><?php echo $newsrow['author'];?></a>
							</p>

							<img src="img/<?php echo $newsrow['image'];?>" class="img-responsive">

							<div class="description">
								<p>

									<?php echo $newsrow['description'];?>
								</p>

							</div>
						</div>

						<?php

							}

						?>

					</section>	

				</div>

				<div class="col-md-4 ">
						<div class="form">
						  <form action="index.php" method="get">
						  	<div class="input-group">
						  		<input class="form-control" name="q"/>
						  		<div class="input-group-btn">
						  			<button class="btn btn-danger">
						  				<i class="glyphicon glyphicon-search"></i>
						  			</button>
						  		</div>
						  	</div>
						  </form>
						</div>
					<div class="categories">
						<h4>Categories</h4>
						<ul>
							<?php
								$seldate="SELECT date_format(date,'%M %Y') FROM `tbl_news` group by Month(date)";

								$query=$link->query($seldate);

								while($fetch=$query->fetch_array()){

							?>
							<li><a href="index.php?ndate=<?php echo $fetch[0];?>"><?php echo $fetch[0];?></a></li>
							

							<?php
								}
							?>
						</ul>
					</div>	
				</div>
			</div>	
			<!-- /.row -->

		</div>
		<!-- /.container -->

	</div>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>