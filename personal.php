<?php
   include('session.php');
   $con1=mysqli_connect("localhost","root","","profile");
   $con2=mysqli_connect("localhost","root","","mess");
   $sql="select * from details where reg = '$login_session' ";
   $sql1="select mr.block p,mr.caterer q,mr.type r from mess_reg mr,mreg m where m.reg='$login_session' and m.mid=mr.mid";
   $sql2="select s.scode a,s.sname b,s.credit c,ss.slot d,ss.fac e from subject s,ssub ss,studreg sr where sr.reg='$login_session' and s.scode=ss.scode and sr.cid=ss.cid order by s.scode ASC";
   $result = mysqli_query($con1,$sql);
   $result1=mysqli_query($con2,$sql1);
   $result2=mysqli_query($con1,$sql2);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="styles.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<title>Student Profile</title>
</head>
<body>
		<div id="sitename">
			<div class="width">
				<h1><a href="#">Student Profile</a></h1>

				<nav style="text-align:right;">
					<ul>
        					<li class="start selected"><a href="index.php">Home</a></li>
        	    				<li class=""><a href="logout.php">Log Out</a></li>
        			</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		<header>
			<h1>Welcome <?php echo $row['name']; ?></h1>
		</header>
		<section id="body" class="width clear">
			<aside id="sidebar" style="position:fixed;" class="column-left">
				<ul>
                	<li>
						<h4>Go TO</h4>
                        <ul class="blocklist">
                            <li><a href="welcome.php">Home</a></li>
							<li class="selected-item"><a href="personal.php">Personal Details</a></li>
							<li><a href="sem.php">Semester Details</a></li>
                            <li><a href="mess.php">Mess Details</a></li>
							
                        </ul>

					</li>	
				</ul>
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				<h3 align=center><b><u>STUDENT PROFILE</b></u></h3>
				  <h3>Personal Details</h3>
				  <br>
				  <?php
				  echo "<table border='1'>";
				  echo "<th align='center' colspan='2'>";
				  echo "Student's Details";
				  echo "</th>";
				  echo "<tr>";
				  echo "<td>Name</td><td>" . $row['name'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Reg. No.</td><td>" . $row['reg'] . "</td>";
				  echo "</tr>";
				  echo "<th align='center' colspan='2'>";
				  echo "Parent's Details";
				  echo "</th>";
				  echo "<tr>";
				  echo "<td>Father's Name</td><td>" . $row['fname'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Father's Occupation</td><td>" . $row['foccup'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Mother's Name</td><td>" . $row['mname'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Mother's Occupation</td><td>" . $row['moccup'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Father's Mob.</td><td>" . $row['fmob'] . "</td>";
				  echo "</tr>";
				  echo "<th align='center' colspan='2'>";
				  echo "Student's Address";
				  echo "</th>";
				  echo "<tr>";
				  echo "<td>Flat No.</td><td>" . $row['fno'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Area</td><td>" . $row['area'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>City</td><td>" . $row['city'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>State</td><td>" . $row['state'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Country</td><td>" . $row['country'] . "</td>";
				  echo "</tr>";
				  echo "<tr>";
				  echo "<td>Pin Code</td><td>" . $row['pin'] . "</td>";
				  echo "</tr>";
				  echo "</table>";
				  ?>
				  <br>
				  <br>
				  <h3>Click here to update your profile-><a href="editpro.php">Edit Profile</a></h3>
				  <br>
				  <br>
				  <h2><a href = "logout.php">Sign Out</a></h2>
			   </body>
			</article>
		</section>
	</section>
</body>
</html>
