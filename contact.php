<?php 
session_start()
?>
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

//                if($_SESSION['UserID'] == "")
//                {
//                        echo "<script type='text/javascript'>alert('Please Login!')</script>";
//                        echo "<script type='text/javascript'>window.history.back()</script>";
//                        exit();
//                }
//
//                if($_SESSION['Status'] != "ADMIN")
//                {
//                        echo "<script type='text/javascript'>alert('This page for Admin only!')</script>";
//                        echo "<script type='text/javascript'>window.history.back()</script>";
//                        exit();
//                }	

                $link = mysql_connect("localhost","root","");
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }
	mysql_select_db("computerclub");

	if(!isset($_SESSION['UserID']))
	{
		echo "<script type='text/javascript'>alert('Please Login!')</script>";
                echo "<script type='text/javascript'>window.location='members.php';</script>";
                        exit();
	}
                $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
                $objQuery = mysql_query($strSQL);
                $objResult = mysql_fetch_array($objQuery);

        ?>
        <div id="templatemo_content">
        	
            <h1>Contact</h1>
            <div class="content_wrapper content_mb_60">
            <div id="contact_form">
                <h3>Contact Form</h3>
                <form method="post" name="contact" action="sumit_contact.php">
                    <div class="col_2">
                        <label for="fullname">Name:</label>
                      <?=$objResult["Username"];?> :: <?=$objResult["Name"];?>
                        <div class="clear"></div>
                    </div>
                    <br><BR><BR>
                    <div class="col_23">
                        <label for="subject">Subject:</label>
                      <input name="subject" type="text" class="input_field" id="subject" maxlength="50" />
                        <div class="clear"></div>
                    </div>
                                <div class="col_23">
                    <label for="text">Message:</label> </div><textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    
                    <input type="submit" name="Submit" value="Submit" class="submit_btn left" />
                    <input type="reset" name="Reset" value="Reset" class="submit_btn right" />
                </form>
            </div> 
            <div class="clear"></div>
		</div>        
        <div class="content_wrapper content_mb_30">
        	<div class="col_2">
                <h3>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</h3>
                ตั้งอยู่ที่ :<br /> 
                1518 ถนนประชาราษฎร์ 1 แขวงวงศ์สว่าง <br />
                เขตบางซื่อ กรุงเทพมหานคร 10800<br />
                
                tel.+66 2 555-2000 <br />
                 

               
			</div>
		</div>
        <h3>Map</h3>
        <div class="img_border">
        <iframe width="630" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.th/maps/ms?msa=0&amp;msid=216188694801350848086.0004f32381d937b6e127c&amp;hl=th&amp;ie=UTF8&amp;ll=13.819836,100.514812&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br /><small>ดู <a href="https://maps.google.co.th/maps/ms?msa=0&amp;msid=216188694801350848086.0004f32381d937b6e127c&amp;hl=th&amp;ie=UTF8&amp;ll=13.819836,100.514812&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">สถานที่ที่ฉันบันทึกไว้</a> ในแผนที่ขนาดใหญ่กว่า</small>

            	
        </div> <!-- END of templatemo_content -->
        <div class="clear"></div>
    </div> <!-- END of templatemo_main_content -->
    </div>
<div id="templatemo_footer">
    	Copyright © 2014 CompterClub KMTNB | Design 
    </div> <!-- END of templatemo_footer -->
</div> <!-- END of templatemo_wrapper -->
</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>