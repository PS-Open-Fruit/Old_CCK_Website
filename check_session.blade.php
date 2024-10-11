@php session_start() @endphp

@php if(isset($_SESSION['ID'])){
   
       if($_SESSION["Status"] == "ADMIN")
	{ 
            echo "<script type='text/javascript'>window.location='admin_page.php';</script>";
         } 
	else
	{   
              echo "<script type='text/javascript'>window.location='user_page.php';</script>";
        }
        exit();
 } @endphp

