<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><!-- Start of headline -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="icon" href="./images/icon.jpg" type="image/jpg" />
<title>ชมรมคมพิวเตอร์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/jquery-1.6.3.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<!-- import java script -->
<script type="text/javascript" src="js/ddsmoothmenu.js"> 
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

</head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header"><span class="header_border"></span>
   <div id="site_title"><a><img src="./images/icon.png" witth="50" height="50" align="center"/>ชมรมคอมฯ</a></div>
		<div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected"><span></span>Home</a></li>
                <li><a href="members.php"><span></span>Members</a>
                    <ul>
                        <li><a href="signup.php">Sign up</a></li>
                       
                  </ul>
                </li>
                <li><a href="activities.php"><span></span>Activities</a>

                </li>
                <li><a href="about.php"><span></span>About</a></li>
                
                <li><a href="contact.php"><span></span>Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
        <div class="clear"></div>
    </div> <!-- END of header -->
    
 <div id="templatemo_main_content">
    	<div id="templatemo_sidebar">
            <div class="sidebar_content_box">
            	<h3>ลิงค์ที่เกี่ยวข้อง</h3>
                <ul class="sidebar_link">
                    <li><a href="http://www.kmutnb.ac.th">KMUTNB</a></li>
                    <li><a href="klogic.kmutnb.ac.th:8080/kris/index.jsp">ระบบลงทะเบียน</a></li>
                    <li><a href="https://mail.kmutnb.ac.th/login">เมลล์นักศึกษา</a></li>
                    <li><a href="http://regis.kmutnb.ac.th/data_doc/calendar/intro_calendar.html">ปฏิทินการศึกษา</a></li>
                    <li><a href="http://mermaid.eng.kmutnb.ac.th/exam/dispseatexam/">เลขที่นั่งสอบ</a></li>
                </ul>
            </div>
    
        </div>
    <?php
//            if($_SESSION['UserID'] == "")
//            {
//                    echo "<script type='text/javascript'>alert('Please Login!')</script>";
//                    echo "<script type='text/javascript'>window.history.back()</script>";
//                    exit();
//            }
//
//            if($_SESSION['Status'] != "USER")
//            {
//                    echo "<script type='text/javascript'>alert('This page for User only!')</script>";
//                    echo "<script type='text/javascript'>window.history.back()</script>";
//                    exit();
//            }	

           $link = mysql_connect("localhost","root","");
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }
	mysql_select_db("computerclub");
            $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
            $objQuery = mysql_query($strSQL);
            $objResult = mysql_fetch_array($objQuery);
    ?>

     <body><center><br>
             <h2>Welcome to User Page! </h2>
      <table border="0" style="width: 300px">
        <tbody>
          <tr>
            <td width="87"> &nbsp;Username</td>
            <td width="197"><?=$objResult["Username"];?>
            </td>
          </tr>
          <tr>
            <td> &nbsp;Name</td>
            <td><?=$objResult["Name"];?></td>
          </tr>
        </tbody>
      </table>
      <br>
      <a href="edit_profile.php">Edit</a><br>
      <br>
      <a href="logout.php">Logout</a>
    </body>
 </center>
   <div class="clear"></div>
 <!-- END of templatemo_main_content -->
 </div>
<div id="templatemo_footer">
    	Copyright © 2014 CompterClub KMTNB | Design 
    </div> <!-- END of templatemo_footer -->
</div> <!-- END of templatemo_wrapper -->