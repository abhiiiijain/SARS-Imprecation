<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>SARS_The_Evil_Eye</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">

  input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">SARS-Imprecation</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php#about">ABOUT</a></li>
        <li><a href="index.php#services">SERVICES</a></li>
        <li><a href="org_list.php">ORG LIST</a></li>
        <li><a href="index.php#covidstatus">Covid19 STATUS</a></li>
        <li><a href="index.php#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>SARS</h1>
  <p>SARS-Imprecation</p>
  <form>
    <div class="input-group">
      <div class="input-group-btn">
        <a href="https://epass.jantasamvad.org/epass/relief/english/"><button type="button" class="btn btn-danger">Apply For ePass</button></a>
      </div>
    </div>
  </form>
</div>

<div id="about_help" class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-12">
      <h2>Need to Raise Help Request ?</h2><br>
      <h4>The current situation of the pandemic has come to an alarming stage in which there is an exponential increase in the number of cases and deaths in the country.<br>
        During these hardships SARS-Imprecation is providing means of helping the needed sections of the society who are undergoing problems in the areas of livelihood and are finding it hard to get food or shelter.<br>
        <strong>We are here providing helping hands to imperilled.</strong></h4><br>
    </div>
  </div>
</div>

<div id="raisehelprequest" class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
      <center>
        <img src="images/help.jpg" width="500px" height="500px">
      </center>
    </div>
    <div class="col-sm-6">
     <h2>Raise New Help Request</h2><br>
        <form name="helprequest" id="helprequest" method="POST" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email..">

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Your Phone number..">

            <label for="address">Address</label>
              <textarea id="address" name="address" placeholder="Address.." style="height:200px"></textarea>

            <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" id="submit" name="submit" value="Submit">
        </form>
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><a href="#" title="Visit SARS-Imprecation">SARS-The Evil Eye</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>

<?php
  include('includes/config.php');
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $subject=$_POST['subject'];

    if($name==NULL && $email==NULL && $phone==NULL && $address==NULL && $subject==NULL )
    {
      echo "<script type='text/javascript'>
        alert('Please fill the fields to Submit the form');
      </script>";
    }
    elseif($name==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Name cannot be empty!');
      </script>";
    }
    elseif($email==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Email cannot be empty!');
      </script>";
    }
    elseif($phone==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Phone cannot be empty!');
      </script>";
    }
    elseif($address==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Address cannot be empty!');
      </script>";
    }
    elseif($subject==NULL)
    {
      echo "<script type='text/javascript'>
        alert('Subject cannot be empty!');
      </script>";
    }
    elseif(!preg_match('/^[0-9]{10}+$/', $phone))
    {
      echo "<script type='text/javascript'>
        alert('Please Provide valid Phone Number!');
      </script>";
    }
    elseif(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email))
    {
      echo "<script type='text/javascript'>
        alert('Please Provide valid Email Id!');
      </script>";
    }
    else
    {

    $sql="INSERT INTO helprequests (help_id,name,email,phone,address,subject) VALUES('',:name,:email,:phone,:address,:subject)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':phone',$phone,PDO::PARAM_STR);
    $query->bindParam(':address',$address,PDO::PARAM_STR);
    $query->bindParam(':subject',$subject,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
      echo "<script type='text/javascript'>
                alert('Help Request Submitted Successfully!');
            </script>";
    }
    else
    {
            echo "<script type='text/javascript'>
                alert('Error !!! Unable to send your Query. Please try after sometime !');
            </script>";
    }
  }
  }
?>
