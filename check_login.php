<?php
session_start();
?>

<?php   
        ob_start();
        //ob_start();
	$link = mysql_connect("localhost","root","");
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }
	mysql_select_db("computerclub");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
                        echo "<script type='text/javascript'>alert('Username and Password Incorrect!')</script>";
                        echo "<script type='text/javascript'>window.history.back()</script>";
	}
	else
	{               
                        $_SESSION['ID'] = session_id();
			$_SESSION['UserID'] = $objResult["UserID"];
                        $_SESSION['Username'] = $objResult["Username"];
                        $_SESSION['Password'] = $objResult["Password"];
			$_SESSION['Status'] = $objResult["Status"];
                        $_SESSION['Name'] = $objResult["Name"];

			session_write_close();
			
                        echo "<script type='text/javascript'>window.location='check_session.php';</script>";
	}
	mysql_close($link);
        ob_end_flush();
?>