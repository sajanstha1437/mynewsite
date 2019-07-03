<?php
include ("admin/includes/config.php");


?>

<html>
<head>
	<title>Final Project</title>
	<link rel="stylesheet" href="slider.css" type="text/css">
	<script type="text/javascript" src="main.js"></script>
	
<link href="css/aboutus.css" type="text/css" rel="stylesheet"/>
<link href="css/main.css" type="text/css" rel="stylesheet"/>


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    <style>
		#formtable{
			background-image:linear-gradient(#CDE6FE,white);
			margin:auto;
			margin-top:20px;
			border:5px solid lightblue;
			border-top-left-radius:40px 40px;
			border-bottom-right-radius:40px 40px;
		}
		#formtable td{
			text-align:center;
		}
		#bottomdiv{
			width:100%;
			background-color:lightgreen;
		}

	
	</style>
    
    </head>



<body>
<div id=maindiv>

  <div id=bannerdiv></div>
	<div id=menudiv>
			<table align="right">
				<tr>
					<td ><a href="index.html">Home</a></td>
					<td ><a href="intro.html">Introduction</a></td>
					<td><a href="aboutus.html">About Us</a></td>
					<td><a href="gallery.html">Gallery</a></td>
					<td><a href="bookings.html">Reservation</a></td>
				  <td class="dropdown">
				  Lessons
				<div class="dropdown-menu">
			  <a href="lesson.html">Lesson 1</a>
				<a href="lesson2.html">Lesson 2</a>
				<a href="lesson3.html">Lesson 3</a>
			  </div>
				  </td>
					
				</tr>
			</table>

	</div>
		
	<div id=bodydiv>
		<div id=body_left> 

			<div id=body_left_top>
				<form id="reservation" action="reservation.php" method="POST">
                <table id="formtable" width="70%" height="80%" style="">
                
                <tr>
                    	<th colspan="2" align="center">Please choose the package type</th>
                       
                  </tr>
                    <tr>
                    	<td>Booking ID</td>
                        <td><input type="text" name="booking_ID" value=""/></td>
                    </tr>
                	<tr>
                    	<td width="50%" align="center">Select Package Type</td>
                        <td width="5 0%" align="left">
                       	  <select>
                            	<option name="package1">Package 1</option>
                                <option name="package2">Package 2</option>
                                <option name="package3">Package 3</option>
                                <option name="package4">Package 4</option>
                                <option name="package5">Package 5</option>
                          </select>
                      </td>
                    </tr>
                    <tr>
                    	<td>Choose trip entry date</td>
                        <td><input type="date" name="entry_date"/></td>
                    </tr>
                    <tr>
                    	<td>Choose trip ending date</td>
                        <td><input type="date" name="end_date"/></td>
                    </tr>
                	<tr>
                    	<td>Client email-ID</td>
                        <td><input type="text" name="client_email" value=""/></td>
                    </tr>
                    <tr>
                    	<td>Client Name</td>
                        <td><input type="text" name="client_name" value=""/></td>
                    </tr>
                    <tr>
                    	<td>Client ID</td>
                        <td><input type="text" name="client_ID" value=""/></td>
                    </tr>
                    <tr>
                    	<td><input type="Submit" name="submit" value="Submit"/></td>
                        <td><input type="reset" name="reset" value="Reset"/></td>
                    </tr>
                </table>
                </form>
			 
			</div>

		  <div id="bottomdiv">
                <div id=body_left_bottomleft>
                        <img src="images/buddha.jpg" height="200px"/>
         		 </div>
                <div id=body_left_bottomiddle>
                
                </div>
                 <div id=body_left_bottomiddle2>
                     
                </div>
    
                <div id=body_left_bottomright>
                    <img src="images/himal.jpg" width="100%" height="200px"/>
                </div>
		  </div>



		</div>
		<div id=body_right>
		<div id=body_right_top>
						<form action="admin/index.php" method="POST">
        	<table style="color:white;">
            	<tr>
                	<td colspan="2">Users Login!!! </td>
                	
                </tr>
                <tr>
                	<td>Username:</td>
                	<td><input type="text" name="name"></td>
                </tr>
                <tr>
                	<td>Password:</td>
                	<td><input type="password" name="password"></td>
                </tr>
                <tr>
                	<td colspan="2"><button>Login</button></td>
                	
                </tr>
                 <tr>
                	<td colspan="2"><a href="admin/indexs.php">Admin Login</a></td>
                	
                </tr>
            </table>
        </form> 

		</div>
	
		</div>
	</div>
<div id="footerdiv">
	<table align="center">
		<tr>
			<td align="center">
				<p> <a href="index.html">Home</a>| 
					<a href="aboutus.html">About us</a>| 
					<a href="gallery.html">Gallery</a>| 
					<a href="reservation.html">Reservation</a>| 
					<a href="contact.html">Contact Us</a><br/>
			Copyrights all reserved @TouristManagementCommitteeNepal.<br/>2018</p>
			</td>
		</tr>
	</table>

</div>
</div>

</body>


</html>