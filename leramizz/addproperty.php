<?php
include("dbcon.php");
if(isset ($_SESSION['loginid']))
{
	$logid=$_SESSION['loginid'];
	
?>
<?php
if(isset($_POST['submit']))
{
$cat=$_POST["category"];
$square=$_POST["square"];
$fur=$_POST["furnishing"];
$bed=$_POST["bedrooms"];
$bal=$_POST["balcony"];
$fl=$_POST["floor"];

 $photo="imges/".$_FILES['imge']['name'];
copy($_FILES['imge']['tmp_name'],$photo);
 $photo1="imges/".$_FILES['img']['name'];
 copy($_FILES['img']['tmp_name'],$photo1);
 $photo2="imges/".$_FILES['imgg']['name'];
copy($_FILES['imgg']['tmp_name'],$photo2);

$trans=$_POST["transaction"];
$pos=$_POST["possession"];
$avail=$_POST["available"];
$pri=$_POST["pri"];
$road=$_POST["road"];
$school=$_POST["school"];
$rail=$_POST["railway"];
$pat=$_POST["pathh"];

   $sql1="INSERT INTO `tbl_home`(`category`,`squarefeet`,`furnishing`,`bedrooms`,`balcony`,`floorno`,`image`,`image1`,`image2`,`transaction`,`possession`,`availablefrom`,`price`,`mainroad`,`school`,`railway`,`status`,`loginid`,`path`) VALUES ('$cat','$square','$fur','$bed','$bal','$fl','$photo','$photo1','$photo2','$trans','$pos','$avail','$pri','$road','$school','$rail',0,'$logid','$pat')";
$result1=mysqli_query($con,$sql1);
//print_r($sql1);


 if($result1==1)
 {
         echo"<script> alert('Added Successfully');</script>";
         
       
 }

}
if(isset($_POST['submit1']))
{
$cat=$_POST["category"];
$area=$_POST["area"];
$length=$_POST["length"];
$breadth=$_POST["breadth"];
$trans=$_POST["transaction"];
$pric=$_POST["pric"];
$photo="imges/".$_FILES['fileu']['name'];
copy($_FILES['fileu']['tmp_name'],$photo);
 $photo1="imges/".$_FILES['fil']['name'];
 copy($_FILES['fil']['tmp_name'],$photo1);
 $photo2="imges/".$_FILES['files']['name'];
copy($_FILES['files']['tmp_name'],$photo2);

$trans=$_POST["transaction"];
$pos=$_POST["possession"];
$avail=$_POST["available"];
$pric=$_POST["pric"];
$road=$_POST["road"];
$school=$_POST["school"];
$rail=$_POST["railway"];
$pathh=$_POST["pathe"];



   $sql1="INSERT INTO `tbl_land`(`category`,`area`,`length`,`breadth`,`transaction`,`price`,`image`,`image1`,`image2`,`status`,`loginid`,`path`) VALUES ('$cat','$area','$length','$breadth','$trans','$pric','$photo','$photo1','$photo2',0,$logid,'$pathh')";
$result1=mysqli_query($con,$sql1);



 if($result1==1)
 {
         echo"<script> alert('Added Successfully');</script>";
         
       
 }

}

if(isset($_POST['submit2']))
{
    $cat=$_POST["category"];
    $square=$_POST["squarefeet"];
    $fur=$_POST["furnishing"];
    $bed=$_POST["bedrooms"];
    $bal=$_POST["balcony"];
    $fl=$_POST["floor"];
    $photo="imges/".$_FILES['fils']['name'];
copy($_FILES['fils']['tmp_name'],$photo);
 $photo1="imges/".$_FILES['fille']['name'];
 copy($_FILES['fille']['tmp_name'],$photo1);
 $photo2="imges/".$_FILES['fle']['name'];
copy($_FILES['fle']['tmp_name'],$photo2);
    
    $trans=$_POST["transaction"];
    $pos=$_POST["possession"];
    $avail=$_POST["availablefrom"];
    $price=$_POST["price"];
    $road=$_POST["road"];
    $school=$_POST["school"];
    $rail=$_POST["railway"];
	$path=$_POST["pathhe"];
    
    
    
     echo $sql1="INSERT INTO `tbl_home`(`category`,`squarefeet`,`furnishing`,`bedrooms`,`balcony`,`floorno`,`image`,`image1`,`image2`,`transaction`,`possession`,`availablefrom`,`price`,`mainroad`,`school`,`railway`,`status`,`loginid`,`path`) VALUES ('$cat','$square','$fur','$bed','$bal','$fl','$photo','$photo1','$photo2','$trans','$pos','$avail','$price','$road','$school','$rail',0,$logid,'$path')";
    $result1=mysqli_query($con,$sql1);
    
    
    
     if($result1==1)
     {
             echo"<script> alert('Added Successfully');</script>";
             
           
     }
    
    }


  ?>

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function valid()
{
	
if((document.form_edit.transaction[0].checked==false) && (document.form_edit.transaction[1].checked==false ))//radiobutton name=gender
{
alert("select transaction");

return false;
}
if((document.form_edit.possession[0].checked==false) && (document.form_edit.possession[1].checked==false ))//radiobutton name=gender
{
alert("select possession");

return false;
}

if((document.form_edit.road[0].checked==false) && (document.form_edit.road[1].checked==false ))//radiobutton name=gender
{
alert("select road status");

return false;
}
if((document.form_edit.school[0].checked==false) && (document.form_edit.school[1].checked==false ))//radiobutton name=gender
{
alert("select school status");

return false;
}

if((document.form_edit.railway[0].checked==false) && (document.form_edit.railway[1].checked==false ))//radiobutton name=gender
{
alert("select railway status");

return false;
}
if(document.form_edit.imge.value=="")
{
alert("select image");
document.form_edit.imge.focus();
return false;
    }
	if(document.form_edit.img.value=="")
{
alert("select image");
document.form_edit.img.focus();
return false;
    }
if(document.form_edit.imgg.value=="")
{
alert("select image");
document.form_edit.imgg.focus();
return false;
    }
	
	}
	</script>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
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
<link rel="stylesheet" type="text/css" href="../jsval/oh-autoval-style.css">
<!--Adding jQuery script. It must be before other script files -->
 <script src="../jsval/jquery.min.js"> </script> 
<!-- Adding oh-autoVal script file -->
  <script src="../jsval/oh-autoval-script.js"></script> 
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
				<div class="forms">
					<h2 class="title1">Add Property Details</h2>
					
				
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Enter Details :</h4>
						</div>
						<div class="form-body">
<form action="" method="post" enctype="multipart/form-data">

<div style="background-color:#e9e9e9;width:550px;"><br>
<h3 style="margin-left:30px;">Sell Your Property Here</h3><br>
<h6 style="margin-left:30px;">We've over 15 Lac buyers for you!</h6><br>
<h6 style="margin-left:30px;">You are posting this property for<span style="background-color:yellow;"> FREE!</span></h6><br></div>

<div class="form-group" style="margin-left:30px;margin-top:20px;">

    <label>Property Type</label>
    <select name="category" style="width:150px;height:25px;border-radius:4px;margin-left:10px;" onChange="yesnoCheck(this);">
                  <option>Select</option>
          <option value="home">Home</option>
    <option value="land">Land</option>
    <option value="shop">Shop</option>
    
                 </select></div>

                 <!-- <div class="form-group" style="margin-left:30px;">
                 <h5>Property Location</h5><br>
                 <label>Location</label>
    <select name="" style="width:150px;height:25px;border-radius:4px;margin-left:40px;">
                  <option>Select</option>
          <option value="">wayanad</option>
    <option value="">Kottayam</option>
    <option value="">Thrissur</option>
    
                 </select></div> -->
                 
                    <div id="ifYes" style="display: none;">
                    <h5 style="margin-left:30px;">Property Features</h5><br>
                    <div class="form-group" style="margin-left:30px;">
                    <label>Squarefeet</label>
                    <input type="text" name="square" id="square" class="av-number" av-message="Numbers only" style="border-radius:4px;margin-left:30px;"/>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Furnishing</label>
                       <select name="furnishing" style="width:180px;margin-left:33px;border-radius:4px;">
                       <option>Fully Furnished</option>
                       <option>Semi Furnished</option>
                       <option>Under Furnished</option>
                       </select>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Bedrooms</label>
                       <select name="bedrooms" style="width:180px;margin-left:33px;border-radius:4px;">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>Balcony</label>
                       <select name="balcony"style="width:180px;margin-left:49px;px;border-radius:4px;">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>No of Floors</label>
                       <select name="floor" style="width:180px;margin-left:25px;border-radius:4px;">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                    <h5>Transaction Type/Avialibilty From</h5><br>
                    <label>Transaction Type</label>
                    <input type="radio" name="transaction" value="resale" >Resale
                    <input type="radio" name="transaction" value="newproperty" checked>New Property<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Possession Status</label>
                    <input type="radio" name="possession" value="underconstruction" >Under Construction
                    <input type="radio" name="possession" value="readytomove" checked>Ready to move<br>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Available From</label>
                   <input type="date" name="available" id="available" style="margin-left:20px;border-radius:4px;"/>
                   </div>
                   <div class="form-group"style="margin-left:30px;"> 
                   <h5>Price Details</h5><br> 
                   <label>Expected Price</label>
                   <input type="text" name="pri" id="pri" class="av-number" av-message="Numbers only" style="margin-left:20px;border-radius:4px;width:170px;"/>
                   </div>
                  
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Facilities</h5><br>
                    <label>Is Main Road Facing </label>
                    <input type="radio" name="road" value="yes">Yes
                    <input type="radio" name="road" value="no" checked="checked"/>No<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                    <label>Near School/College</label>
                    <input type="radio" name="school" value="yes">Yes
                    <input type="radio" name="school" value="no"  checked="checked"/>No<br>
  
                   </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                    <label>Railway Station</label>
                    <input type="radio" name="railway" value="yes">Yes
                    <input type="radio" name="railway" value="no" checked>No<br>
                    </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Photos</h5><br>
                   <label>Exterior View</label><br>
                   <input type="file" name="imge" id="imge" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Living Room</label><br>
                   <input type="file" name="img" id="img" class="av-image" av-message="Choose Image Correctly">
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Bedroom</label><br>
                   <input type="file" name="imgg" id="imgg" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
				    <div class="form-group" style="margin-left:30px;">
                   <label>Google Map Path</label><br>
                   <textarea name="pathh"></textarea>
                   </div>
                   <div class="form-group">
                   <input type="submit" name="submit" id="submit" value="ADD" style="width:100px;margin-left:200px;"/>
                   </div>
                   </div>
                   <div id="no" style="display: none;">
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Area</h5><br>
                    <label>Plot Area</label>
                    <input type="text" name="area" id="area"  class="av-number" av-message="Numbers only" style="margin-left:35px;border-radius:4px;"/>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                   
                    <label>Plot Length</label>
                    <input type="text" name="length" id="length" class="av-number" av-message="Numbers only" style="margin-left:20px;border-radius:4px;"/>
                     </div>
                     <div class="form-group" style="margin-left:30px;">
                   
                    <label>Plot Breadth</label>
                    <input type="text" name="breadth" id="breadth" class="av-number" av-message="Numbers only"  style="margin-left:15px;border-radius:4px;"/>
                   
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                    <h5>Transaction Type/Avialibilty From</h5><br>
                    <label>Transaction Type</label>
                    <input type="radio" name="transaction" value="resale" checked>Resale
                    <input type="radio" name="transaction" value="newproperty">New Property<br>
  
                   </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Price Details</h5><br>
                   <label>Expected Price</label>
                   <input type="text" name="pric" id="pric" class="av-number" av-message="Numbers only" style="margin-left:15px;border-radius:4px;"/>
                   </div>

                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Photos</h5><br>
                   <label>Image</label>
                   <input type="file" name="fileu" id="fileu" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Image</label>
                   <input type="file" name="fil" id="fil" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Image</label>
                   <input type="file" name="files" id="files" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
				    <div class="form-group" style="margin-left:30px;">
                   <label>Google Map Path</label><br>
                   <textarea name="pathe"></textarea>
                   </div>
                   <div class="form-group">
                   <input type="submit" name="submit1" value="ADD"/>
                   </div>
                   </div>
                   
                   <div id="if" style="display: none;">
                   <h5 style="margin-left:30px;">Property Features</h5><br>
                    <div class="form-group" style="margin-left:30px;">
                    <label>Squarefeet</label>
                    <input type="text" name="squarefeet" id="square" class="av-number" av-message="Numbers only" style="border-radius:4px;margin-left:30px;"/>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Furnishing</label>
                       <select name="furnishing" style="width:180px;margin-left:33px;border-radius:4px;">
                       <option>Fully Furnished</option>
                       <option>Semi Furnished</option>
                       <option>Under Furnished</option>
                       </select>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Bedrooms</label>
                       <select name="bedrooms" style="width:180px;margin-left:33px;border-radius:4px;">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>Balcony</label>
                       <select name="balcony"style="width:180px;margin-left:49px;px;border-radius:4px;">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>No of Floors</label>
                       <select name="floor" style="width:180px;margin-left:25px;border-radius:4px;">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                    <h5>Transaction Type/Avialibilty From</h5><br>
                    <label>Transaction Type</label>
                    <input type="radio" name="transaction" value="resale" checked>Resale
                    <input type="radio" name="transaction" value="newproperty">New Property<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Possession Status</label>
                    <input type="radio" name="possession" value="underconstruction" checked>Under Construction
                    <input type="radio" name="possession" value="readytomove">Ready to move<br>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Available From</label>
                   <input type="date" name="availablefrom" id="available" style="margin-left:20px;border-radius:4px;"/>
                   </div>
                   <div class="form-group"style="margin-left:30px;"> 
                   <h5>Price Details</h5><br> 
                   <label>Expected Price</label>
                   <input type="text" name="price" id="price" class="av-number" av-message="Numbers only" style="margin-left:20px;border-radius:4px;width:170px;"/>
                   </div>
                  
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Facilities</h5><br>
                    <label>Is Main Road Facing </label>
                    <input type="radio" name="road" value="yes" checked>Yes
                    <input type="radio" name="road" value="no">No<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                    <label>Near School/College</label>
                    <input type="radio" name="school" value="yes" checked>Yes
                    <input type="radio" name="school" value="no">No<br>
  
                   </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                    <label>Railway Station</label>
                    <input type="radio" name="railway" value="yes" checked>Yes
                    <input type="radio" name="railway" value="no">No<br>
                    </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Photos</h5><br>
                   <label>Image1</label><br>
                   <input type="file" name="fils" id="fils" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Image2</label><br>
                   <input type="file" name="fille" id="fille" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Image3</label><br>
                   <input type="file" name="fle" id="fle" class="av-image" av-message="Choose Image Correctly"/>
                   </div>
				    <div class="form-group" style="margin-left:30px;">
                   <label>Google Map Path</label><br>
                   <textarea name="pathhe"></textarea>
                   </div>
                   <div class="form-group">
                   <input type="submit" name="submit2" value="ADD"/>
                   </div>
                   </div>
                  

                    <script>
    function yesnoCheck(that) {
        if (that.value == "home") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
      
         if (that.value == "land") {
            //alert("check");
            document.getElementById("no").style.display = "block";
        } else {
            document.getElementById("no").style.display = "none";
        }
          if (that.value == "shop") {
            //alert("check");
            document.getElementById("if").style.display = "block";
        } else {
            document.getElementById("if").style.display = "none";
        }
        
    }
</script>

</form>

								
				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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