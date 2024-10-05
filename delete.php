<?php 
session_start()
?>
<?php

if($_SESSION['UserID'] == "")
	{
		echo "<script type='text/javascript'>alert('Please Login!')</script>";
                        echo "<script type='text/javascript'>window.location='members.php';)</script>";
                        exit();
	}
	
$link = mysql_connect("localhost","root","");
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }
	mysql_select_db("computerclub");
    
     
        $strSQL1 = "DELETE FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery1 = mysql_query($strSQL1);
       
        
        echo "<script type='text/javascript'>window.location='logout.php';</script>";
        
        ?>

