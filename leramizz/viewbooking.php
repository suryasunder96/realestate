<?php
include("dbcon.php");
if(isset ($_SESSION['loginid']))
{
	$logid=$_SESSION['loginid'];
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php
		include("header.php");
		?>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Booking Details</h2>
					<?php
      $sql1="select tbl_home.image,tbl_home.category,tbl_home.price,register.fname,register.lname,booking.status,booking.bid from tbl_home,booking,register where register.loginid=booking.loginid and booking.homeid=tbl_home.homeid and tbl_home.loginid=$logid";
					 $res1=mysqli_query($con,$sql1);
					
					 
	  $no=mysqli_num_rows($res1);
	  if($no==0)
	  {
	  echo "No Records Here";
	  }
	  else
	  {
	 
?>
					<div class="panel-body widget-shadow">
						<h4></h4>
						<table class="table">
							<thead>
								<tr>
								 <th>Booked Person</th>
								  <th>Home category</th>
								
								    <th>Image</th>
									 <th>Price</th>
								 
								</tr>
							</thead>
							<tbody>
								<?php
								 while($ar=mysqli_fetch_array($res1))
					 {
	  ?>
								<tr>
								  <td><?php echo $ar['3'];?> <?php echo $ar['4'];?></td>
								  <td><?php echo $ar['1'];?></td>
								
								  <td> <img src="../builder/<?php echo $ar['0'] ;?>" height="100" width="100"></td>
								  <td><?php echo $ar['2'];?></td>
								  <td>
								  <?php
								   if($ar['5']=="0")
					 {
					 ?>
					 
					<a href="approvebook.php?id=<?php echo $ar['6'];?>"><b style="color:#0000FF">Approve</b></a>
					 <?php
					 }
					  else
					 {
					?>
					<b style="color:#00CC00">Approved</b>
					<?php
					 }
					 ?>
					 </td>
								 
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
					
				<?php
								}
								?>
				
				</div>
			</div>
		</div>
		<!--footer-->
			<!--footer-->
	<?php
	include("footer.php");
	?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>
<?php
 }
 else
 {
 ?>
 <script>
 alert("Invaid Login");
 window.location="../index.php";
 </script>
 <?php
 }
 ?>