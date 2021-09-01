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
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="org_list.php">ORG LIST</a></li>
        <li><a href="#covidstatus">Covid19 STATUS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>SARS</h1>
  <p>The Evil Eye</p>
  <form>
    <div class="input-group">
      <div class="input-group-btn">
        <a href="https://epass.jantasamvad.org/epass/relief/english/"><button type="button" class="btn btn-danger">Apply For ePass</button></a>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About SARS-Imprecation</h2><br>
      <h4>Welcome to SARS-Imprecation the site that connects the needful to the their needs. This site has been created with the vision of helping the community by giving the people a portal to communicate their problems to the organizations that can solve them.<br>
      People can add their problems on the site which will be available to all NGOs and organizations that have taken a step forward to help.Donations will be given to the NGOs.<br>
      The strength in communication is a vital tool in the fight against the pandemic. It's time to help each other and win this battle.<br>
      This site will also help the NGOs to get connected with the ones in need at the fastest possible rate of information that has been directly provided by the person who is in distress.</h4>
      <br><a href="#contact"><button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <center>
      <span><img src="images/signal.jpg" width="300px" height="300px"></span></center>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <center>
      <span><img src="images/globe.jpg" width="300px" height="300px"></span></center>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to strengthen our community and to provide a means for anyone willing to help. In the times of distress communication and sharing your problems is the best way to tackle such an issue, afterall the problem needs to be known to be solved.<br>
            The aim of this site is to provide the NGO with data and information about the people who require help and support of any essential need (food , water , shelter , mask , sanitizer ).<br>
            This will make the access of the knowledge of the whereabouts of the people facing difficulties easily accessible in a place for any organization to know about.<br>
            The people facing difficulties are in tremendous pressure. The fear of loss of jobs is also an important reason for mental instability which is leading people into depression and sadness.Thus we encourage that this fight must be fought together.</h4><br>

    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>

  <div class="row slideanim">
   <a href="help.php"><div class="col-sm-6">
      <span><img src="images/helpme.jpg"></span>
      <h4>Raise Help Request</h4>
    </div></a>
   <a href="donate.php"> <div class="col-sm-6">
      <span><img src="images/donation.jpg"></span>
      <h4>Donate</h4>
    </div> </a>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="covidQuote" class="container-fluid text-center bg-grey">
  <h2>Covid Quotes</h2><br>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"To beat this worldwide pandemic, the world has to, must come together."<br><span>Shah Rukh Khan, Actor</span></h4>
      </div>
      <div class="item">
        <h4>"The fact is, uncertainty is the reality of the moment."<br><span>Samir Parikh, Fortis Healthcare</span></h4>
      </div>
      <div class="item">
        <h4>"A good immune response is key in defeating COVID-19."<br><span>Anu Acharya, Mapmygenome</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="covidstatus" class="container-fluid">
  <div class="text-center">
    <h2>Covid19 STATUS</h2>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
        <iframe src="https://public.domo.com/cards/bWxVg" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>
    </div>
    <div class="col-sm-4 col-xs-12">
        <iframe src="https://public.domo.com/cards/dwoBJ" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>
    </div>
    <div class="col-sm-4 col-xs-12">
      <iframe src="https://public.domo.com/cards/dLj4g" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<iframe src="https://www.covid19india.org/" width="100%" height="600" marginheight="0" marginwidth="0" frameborder="0"></iframe>

<?php include('testimonial.php'); ?>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chandigarh, India</p>
      <!--<p><span class="glyphicon glyphicon-phone"></span> +91 7896541230</p> -->
      <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:sarstheevileye.help@gmail.com">sarstheevileye.help@gmail.com</a></p>
    </div>
    <div class="col-sm-7 slideanim">
      <form name="contactus" id="contactus" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" id="submit" name="submit" type="submit">Send</button>
        </div>
      </div>
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
</html>

<?php
  include('includes/config.php');
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comments=$_POST['comments'];

    $sql="INSERT INTO contactus (ticket_no,name,email,comment) VALUES('',:name,:email,:comments)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':comments',$comments,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
      echo "<script type='text/javascript'>
                alert('Query Submitted Successfully!');
            </script>";
    }
    else
    {
            echo "<script type='text/javascript'>
                alert('Error !!! Unable to send your Query. Please try after sometime !');
            </script>";
    }
  }
?>
