<?php
//session_start();
include("../dbcon.php");
$hid=$_GET["id"];


$insert1="update booking set status=1 where bid=$hid";
$res1=mysqli_query($con,$insert1);
//$delete1="delete from wishlist where hid=$hid";
//$del1=mysqli_query($con,$delete1);

?>
<script>
   
    
alert('Booking Approved');
window.location="viewbooking.php";
    
</script>