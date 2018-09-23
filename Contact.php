<!DOCTYPE HTML>
<html>

<head>
	<title>Contact &mdash; Nathan Neeley</title>
	<link href=format.css rel=stylesheet type=text/css>
<script>
    function validate(){
        var validation = true;
        var fname = document.myform.firstname.value;
        var lname = document.myform.lastname.value;
        var mail = document.myform.email.value;
        var name_pattern = /^[a-zA-Z][a-zA-Z\s]+$/;
        var email_pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        
            if (name_pattern.test(fname)==false){
                document.getElementById("firstname_error").innerHTML="";
                validation = false;
            }
            if (name_pattern.test(fname)==true){
                document.getElementById("firstname_error").innerHTML="";
            }
            if (name_pattern.test(lname)==false){
                document.getElementById("lastname_error").innerHTML="";
                validation = false;
            }
            if (name_pattern.test(lname)==true){
                document.getElementById("lastname_error").innerHTML="";
            }
            if (email_pattern.test(mail)==false){
                document.getElementById("email_error").innerHTML="";
                validation = false;
            }
            if (email_pattern.test(mail)==true){
                document.getElementById("email_error").innerHTML="";
            }
            if (document.getElementById("message_id").value == ""){
                validation = false;
            }
            if (document.getElementById("reason_id").value == ""){
                validation = false;
            }
            if (validation == false){
                alert("Complete All Fields")
            }
        return validation;
    }
</script>
<style>
    p {
        font-size: 150%;
    }
    .error {
        color: #FF0000;
    }
</style>
</head>


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $to = "nathan94@mindspring.com";
        $subject = $_POST['reason'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $allmessage ="First Name: $firstname\r\n Last Name: $lastname\n\r Email: $email\n Message: $message";
        nl2br($allmessage);
        mail($to, $subject, $allmessage);
    }
?>


<body>
<div class=links><h3 class=leftSide><a href=index.html>Nathan Neeley</a></h3>
    <h3 class=rightSide><a href=index.html>Home &emsp; &ensp;</a><a href=Research.html>Research &emsp; &ensp;</a><a href=Teaching.html>Teaching &emsp; &ensp;</a><a href=CurriculumVitae.html>Curriculum Vitae &emsp; &ensp;</a><a href=Contact.php>Contact &emsp;</a></h3></div>
<div style="clear: both;"></div>
<div class=headerFormat><h1 style="margin-top: 145px; text-align: center;">Contact</h1></div>
<div class=documentFormat>
<h1 style="text-align: center;">Nathan Neeley</h1>
<br>
<HR SIZE="5">
<br>
<br>
<br>
<center><p><span style="font-size: 115%;"><b>Email:</b></span><a href="mailto:nathan94@mindspring.com" style="text-decoration: none"> nathan94@mindspring.com</a></p>
<br>
<br>
<br>
<br>
    <p><a href="https://uc.academia.edu/NathanNeeley" style="text-decoration: none" target="_blank">
        <img src=AcademiaLogo.png alt=incorrect style="width: 85px; height: 85px; margin: 0px 40px;">
    </a>
    <a href="https://www.linkedin.com/in/nathan-neeley-35a613114/" style="text-decoration: none" target="_blank">
        <img src=LinkedinLogo.png alt=incorrect style="width: 85px; height: 85px; margin: 0px 40px;">
    </a>
    <a href="https://www.facebook.com/nathan.neeley.9" style="text-decoration: none" target="_blank">
        <img src=FacebookLogo.png alt=incorrect style="width: 85px; height: 85px; margin: 0px 40px;">
    </a>
    <a href="https://twitter.com/nneeley94" style="text-decoration: none" target="_blank">
        <img src=TwitterLogo.png alt=incorrect style="width: 85px; height: 85px; margin: 0px 40px;">
    </a>
    <a href="https://www.instagram.com/nneele94/" style="text-decoration: none" target="_blank">
        <img src=InstagramLogo.png alt=incorrect style="width: 85px; height: 85px; margin: 0px 40px">
    </a></p>
    </center>
<br>
<br>
<br>
<br>
<p>If you wish to contact me with inquiries or request additional research or teaching materials, please email <a href="mailto:nathan94mindspring.com" style="text-decoration: none">me</a> or fill out the form below, and I will respond as soon as possible.</p>
<br>
<br>
<br>
<br>
    <p><span class="error" style="font-size: 85%">* required field</span></p><br>
    <form id="myform_id" name="myform" onsubmit="return validate()" method="POST" action="#">

    <h3>
        <label for="firstname">First Name: <span class="error">*</span> &ensp;</label>
        <input type="text" id="firstname_id" name="firstname">&emsp;<span id="firstname_error" style="font-weight: normal"></span><br><br><br>
    
        <label for="lastname">Last Name: <span class="error">*</span> &ensp;</label>
        <input type="text" id="lastname_id" name="lastname">&emsp;<span id="lastname_error" style="font-weight: normal"></span><br><br><br>
            
        <label for="email">Email: <span class="error">*</span> &ensp;</label>
        <input type="text" id="email_id" name="email" placeholder="<id>@<domain>">&emsp;<span id="email_error" style="font-weight: normal"></span><br><br><br>
    
        <label for="reason">Reason: <span class="error">*</span> &ensp;</label>
        <select id="reason_id" name="reason">
            <option value=""></option>
            <option value="Research Inquiries">Research Inquiries</option>
            <option value="Teaching Inquiries">Teaching Inquiries</option>
            <option value="Other Inquiries">Other Inquiries</option>
        </select>&emsp;<span id="reason_error" style="font-weight: normal"></span><br><br>

        <h3>Message: <span class="error">*</span>&emsp;<span id="message_error" style="font-weight: normal"></span></h3>
        <textarea id="message_id" name="message" cols="50" rows="12"></textarea><br><br><br>
    </h3>

    <input name="submit" type="submit" value="Submit">
    </form>


<br>
<br>
<HR SIZE="5" style="margin:0">
<p style="font-size: 75%; background-color: Gainsboro">Nathan Neeley 2018 <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/80x15.png"/></a></p><br/>

    <center><p style="font-size: 125%;">Contact</p>
<br>
</div>
</div>


</body>
</html>
