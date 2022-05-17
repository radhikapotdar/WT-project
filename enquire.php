<?php
include("connection.php");
error_reporting(0);
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=0.1">
        <title>Enquiry</title>
        <link rel="stylesheet" href="index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-----Header------>

       <section class="sub-header">
         <nav>
             <a href="index.html"><img src="C:Users/radhi/Desktop/WT-project/images/victoria Logo.png"></a>
             
             <div class="nav-links"> 
                 <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                 </ul>
                 
                </nav>
                <h1>Enquire</h1>
       </section>
       
       <!------Enquiry-------->

         <section class="enquiry">
             <div class="enquiry-col">

             <form action="enruiry-form.php" method="post">

                 <label for="fname">Enter Your Name:</label>
                 <input type="text" name="name" placeholder="Enter Your Name" name="name" required></input>
                 <label for="email">Enter Email Address:</label>
                 <input type="email" name="email" placeholder="Enter Email address" name="email" required>
                 <label for="mobile">Enter Mobile Number:</label>
                 <input type="phone" name="phone"placeholder="Enter Your Mobile Number" name="mobile" required>
                 <label for="subject">Subject:</label>
                 <input type="text" name="subject" placeholder="Enter Subject" name="subject" required>
                 <label for="message">Enter Your Message:</label>
                 <textarea rows="8" name="message"placeholder="Message" name="message" required></textarea>
                 <button type="submit" name="submit" class="hero-btn black-btn">Submit</button>

             </form>
        </div>
        </section>

        <!------Enquiry ends------>
        
        

        <!-------Footer-------->

        <section class="footer">
            <h3>About Us</h3>
            <p>We Are Highly Recommended Foreign Language Institute.</p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
                

            </div>
        </section>

    </body>
</html>

<?php

$name=$_GET['name'];
$em=$_GET['email'];
$mob=$_GET['mobile'];
$sub=$_GET['subject'];
$submit=$_GET['submit'];

$query="insert into student values('$name','$em','$mob','$sub','$submit')";
$data= mysqli_query($conn,$query);
if($data)
{
    echo "Data inserted into database";
}
else
{
    echo "Failed to insert data into database";
}
?>

