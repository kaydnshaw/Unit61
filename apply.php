<?php
    $career = "1";
    error_reporting(0);
    include 'connect.php';
    include 'header.php';
    if(isset($_POST['submit'])){
        $applyrole = $_POST['role'];
        $applyname = $_POST['name'];
        $applyemail = $_POST['email'];
        $applyaddress = $_POST['address'];
        $applyphonenumber = $_POST['phonenumber'];
        $applymessage = $_POST['message'];

        $applysql = "INSERT INTO applications (role, name, email, address, phonenumber, message) VALUES ('".$applyrole."','".$applyname."','".$applyemail."','".$applyaddress."','".$applyphonenumber."','".$applymessage."')";
        if($applyrole !== "Role - Please Select"){
            $applyquery = mysqli_query($connect_db, $applysql);

            if($applyquery === TRUE){
                header("location: success.php");
            }
        }else{
            header("location: apply.php?err=1");
        }
    }
    include 'style.php';
?>
<html>
    <head>
        <title> Apply for a role - Hot Beans Web</title>

    </head>
    <body>
    <center>
        <?php if($_GET['err'] == "1"){ ?>
        <div class="roleisnull">
            <a>Please select a role below</a>
        </div>
        <?php
            }
        ?>
        <div id="applydiv" class="applydiv">
            <a class="applynowtxt">Apply Now</a><br>
            <form autocomplete="off" id="applyform" method="POST" action="apply.php" class="applyform">
                <select class="role" name="role" id="role">
                    <option>Role - Please Select</option>
                    <option value="Web Developer">Web Developer</option>
                    <option value="Manager">Manager</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Web Designer">Web Designer</option>
                </select><br>
                <input required type="text" class="name" id="name" name="name" placeholder="Full Name"></input><br>
                <input required type="email" class="email" id="email" name="email" placeholder="Email"></input><br>
                <input required type="text" class="address" id="address" name="address" placeholder="Address"></input><br>
                <input required type="text" class="phonenumber" id="phonenumber" name="phonenumber" placeholder="Phone Number"></input><br>
                <input required type="textbox" class="message" id="message" name="message" placeholder="Tell us a bit about yourself"></input><br>
                <input type="submit" class="submit" id="submit" name="submit" placeholder="Submit Application"></input><br>
            </form>
        </div>
    </center>
    </body>
</html>