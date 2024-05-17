
<?php 
	include 'style.php';
	error_reporting(0);
	include 'header.php';

	include 'connect.php';
	$pid = $_GET['pid'];
	$select_pid_sql = "Select * from profiles where id='".$pid."'";
	$select_pid_query = mysqli_query($connect_db, $select_pid_sql);
	

?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
</head>
<body>

<?php

	while($pinfo = MYSQLI_FETCH_ASSOC($select_pid_query)){
		$apid = $pinfo['id'];
		$aname = $pinfo['name'];
		$abio = $pinfo['bio'];

		?>
		<title><?php echo $aname; ?>'s Profile</title>
		<h1><?php echo $aname; ?></h1>
		<?php

	}

	if($pid != $apid){
		header("location: index.php");
	}
	if(!isset($pid)){
		header("location: index.php");
	}
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
      $("#ourdevelopers").on("click", function(){
		if (document.getElementById("ourdevelopersdivcontainer").style.display !== 'block') {
        document.getElementById("ourdevelopersdivcontainer").style.display = 'block';
		document.getElementById("aboutusdivcontainer").style.display = 'none';
		document.getElementById("profilecontainer").style.height = '800px';
    }
    else {
        document.getElementById("aboutusdivcontainer").style.display = 'none';
		document.getElementById("profilecontainer").style.height = '435px';
		document.getElementById("ourdevelopersdivcontainer").style.display = 'none';
		document.getElementById("emp1bio").style.display = 'none';
		document.getElementById("emp1").style.display = 'block';
		document.getElementById("emp1name").style.display = 'block';
		document.getElementById("emp2").style.display = 'block';
		document.getElementById("emp2name").style.display = 'block';
		document.getElementById("emp2name").style.left = "-0.5%";
		document.getElementById("emp2").style.left = "26.5%";
		document.getElementById("emp2bio").style.display = 'none';
    }
      });
    });
	$(document).ready(function() {
      $("#aboutus").on("click", function(){
		if (document.getElementById("aboutusdivcontainer").style.display !== 'block') {
        document.getElementById("aboutusdivcontainer").style.display = 'block';
		document.getElementById("ourdevelopersdivcontainer").style.display = 'none';
		document.getElementById("profilecontainer").style.height = '500px';
    }
    else {
        document.getElementById("aboutusdivcontainer").style.display = 'none';
		document.getElementById("profilecontainer").style.height = '435px';
		document.getElementById("ourdevelopersdivcontainer").style.display = 'none';
		document.getElementById("emp1bio").style.display = 'none';
		document.getElementById("emp1").style.display = 'block';
		document.getElementById("emp1name").style.display = 'block';
		document.getElementById("emp2").style.display = 'block';
		document.getElementById("emp2name").style.display = 'block';
		document.getElementById("emp2name").style.left = "-0.5%";
		document.getElementById("emp2").style.left = "26.5%";
		document.getElementById("emp2bio").style.display = 'none';
    }
      });
    });
	$(document).ready(function() {
      $("#emp1").on("click", function(){
		if (document.getElementById("emp1bio").style.display !== 'block') {
        document.getElementById("emp1bio").style.display = 'block';
		document.getElementById("emp2").style.display = 'none';
		document.getElementById("emp2name").style.display = 'none';
    }
    else {
        document.getElementById("emp1bio").style.display = 'none';
		document.getElementById("emp2").style.display = 'block';
		document.getElementById("emp2name").style.display = 'block';
    }
      });
    });
	$(document).ready(function() {
      $("#emp2").on("click", function(){
		if (document.getElementById("emp2bio").style.display !== 'block') {
        document.getElementById("emp2bio").style.display = 'block';
		document.getElementById("emp2name").style.left = "-66%";
		document.getElementById("emp2").style.left = "3.5%";
		document.getElementById("emp1").style.display = 'none';
		document.getElementById("emp1name").style.display = 'none';
    }
    else {
        document.getElementById("emp2bio").style.display = 'none';
		document.getElementById("emp2").style.left = "26.5%";
		document.getElementById("emp2name").style.left = "-0.5%";
		document.getElementById("emp1").style.display = 'block';
		document.getElementById("emp1name").style.display = 'block';
    }
      });
    });
    </script>
	<div id="profilecontainer" class="profilecontainer">
		<div class="profilenamecontainer">
			<img <?php if($_GET['pid'] == "1"){ ?> src="../images/logo.jpg" <?php }elseif($_GET['pid'] == "2"){ ?> src="../images/emp1.jpg" <?php }else{ ?> src="../images/emp2.jpg" <?php } ?>class="logoimg">
			<?php if($_GET['pid'] == '2'){?> <a style="left:-29.5%;text-align: left;" class="profilename"><?php echo $aname; ?></a> <?php }elseif($_GET['pid'] == '3'){?> <a style="left:-26.5%;text-align: left;" class="profilename"><?php echo $aname; ?></a> <?php }elseif($_GET['pid'] == '1'){ ?> <a class="profilename"><?php echo $aname; ?></a> <?php } ?>
			
			<?php 
				if($_GET['pid'] == "1"){
					?>
					
					<button id="ourdevelopers" class="ourdevelopers">Our Developers</button>
					<button id="aboutus" class="aboutus">About Us</button>
					
					<?php
				}else{
					?>
					<a class="profilebio"><?php echo $abio; ?></a>
					<?php
				}
			?>
			<div id="ourdevelopersdivcontainer" class="ourdevelopersdivcontainer">
				<div class="ourdevelopersdiv">
					
					<img src="../images/emp1.jpg" id="emp1" class="emp1pic">
					<div id="emp1name" class="emp1name"><a class="empprofile" href="profile.php?pid=2">Lauren Parker</a></div>
						<div id="emp1bio" class="emp1bio"><a>Role: CEO</a>
							<br>
							<a>Lauren plays an important role within Hot Beans Web as shes useful with her role as a CEO because she's great with strategic leadership, operational management and she's brilliant with innovation and thats what makes her an important person within Hot Beans Web
						</div>
					</div>
					<img src="../images/emp2.jpg" id="emp2" class="emp2pic">
					<div id="emp2name" class="emp2name"><a class="empprofile" href="profile.php?pid=3">Craig David</a></div>
						<div id="emp2bio" class="emp2bio"><a>Role: Web Developer</a>
							<br>
							<a>Craig David plays an important role within Hot Beans Web as he is the only person that we have hired so far and we are constantly looking for new people and Craig is the best we've had and hes had 14 years of experience within web development</a>
						</div>
					</div>
					
				</div>
			</div>
			<div id="aboutusdivcontainer" class="aboutusdivcontainer">
				<div class="aboutusdiv">
					
					<a class="aboutustxt">We are a website development company, we are currently recruiting and looking for more web developers to join our company, feel free to apply <a class="aboutustxt" href="apply.php">here</a>. </a>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>