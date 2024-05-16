<?php
    $career = "1";
    error_reporting(0);
    include 'connect.php';
    include 'header.php';
    include 'style.php';
?>
<title>Success submitting application</title>
<div class="success" id="success">
    <a class="successtxt">You have successfully submitted your application, we will review it as soon as possible and get back to you when we can. Best of luck!</a>
</div>
<div class="goback" id="goback">
    <a href="profile.php?pid=1" class="gobacktxt">Go Back</a>
</div>