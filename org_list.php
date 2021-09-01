<?php
include('includes/config.php');
?>

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
<style>
 {
  box-sizing: border-box;
}

#myInput,#myInput1,#myInput2 {
  background-image: url('images/search.jpg');
  background-position: 3px 3px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable, #myTable1,#myTable2 {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td,#myTable1 th, #myTable1 td,#myTable2 th, #myTable2 td {
  text-align: left;
  padding: 12px;
}

#myTable tr,#myTable1 tr,#myTable2 tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover,#myTable1 tr.header, #myTable1 tr:hover,#myTable2 tr.header, #myTable2 tr:hover {
  background-color: #f1f1f1;
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
  <p>The Evil Eye</p>
  <form>
    <div class="input-group">
      <div class="input-group-btn">
        <a href="https://epass.jantasamvad.org/epass/relief/english/"><button type="button" class="btn btn-danger">Apply For ePass</button></a>
      </div>
    </div>
  </form>
</div>

<div class="container-fluid text-center">

  <!-- collapse for NGO LIST -->
  <div class="row">
    <div class="col-sm-12">
      <a class="container-fluid text-center" data-toggle="collapse" href="#ngo">
        <h2>NGO LIST</h2>
      </a>
    </div>
  </div>
  <div id="ngo" class="row" data-parent="#container-fluid text-center">
    <div class="col-sm-12">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Pincode.." title="Type in a name">

        <table id="myTable">
          <tr class="header">
            <th style="width:05%;">sl#</th>
            <th style="width:30%;">NGO Name</th>
            <th style="width:40%;">NGO Address</th>
            <th style="width:20%;">NGO Pincode</th>
            <th style="width:30%;">Contact Number</th>
            <th style="width:40%;">Website</th>
          </tr>

          <?php $sql = "SELECT * from ngo";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount() > 0)
            {
              foreach($results as $result)
            {
          ?>
          <tr>
            <td><?php echo htmlentities($cnt);?></td>
            <td><?php echo htmlentities($result->name);?></td>
            <td><?php echo htmlentities($result->address);?></td>
            <td><?php echo htmlentities($result->pincode);?></td>
            <td>+91 - <?php echo htmlentities($result->contact);?></td>
            <td><a href="<?php echo htmlentities($result->website);?>"><?php echo htmlentities($result->website);?></a></td>
          </tr>
          <?php $cnt=$cnt+1;} }?>
        </table>
    </div>
  </div>
<!-- collapse for Police LIST -->
  <div class="row">
    <div class="col-sm-12">
      <a class="container-fluid text-center" data-toggle="collapse" href="#police">
        <h2>Police Stations LIST</h2>
      </a>
    </div>
  </div>
  <div id="police" class="row" data-parent="#container-fluid text-center">
    <div class="col-sm-12">
      <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for Pincode.." title="Type in a name">

      <table id="myTable1">
        <tr class="header">
          <th style="width:05%;">sl#</th>
          <th style="width:30%;">P.S. Name</th>
          <th style="width:50%;">P.S. Address</th>
          <th style="width:30%;">P.S. Pincode</th>
          <th style="width:30%;">Contact Number</th>
        </tr>

        <?php $sql = "SELECT * from police_details";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $cnt=1;
          if($query->rowCount() > 0)
          {
            foreach($results as $result)
          {
        ?>
        <tr>
          <td><?php echo htmlentities($cnt);?></td>
          <td><?php echo htmlentities($result->name);?></td>
          <td><?php echo htmlentities($result->address);?></td>
          <td><?php echo htmlentities($result->pincode);?></td>
          <td><?php echo htmlentities($result->contact);?></td>
        </tr>
        <?php $cnt=$cnt+1;} }?>
      </table>
    </div>
  </div>
<!-- collapse for hospitals -->
  <div class="row">
    <div class="col-sm-12">
      <a class="container-fluid text-center" data-toggle="collapse" href="#hospital">
        <h2>Hospitals LIST</h2>
      </a>
    </div>
  </div>
  <div id="hospital" class="row" data-parent="#container-fluid text-center">
    <div class="col-sm-12">
      <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for Pincode.." title="Type in a name">

      <table id="myTable2">
        <tr class="header">
          <th style="width:10%;">sl#</th>
          <th style="width:30%;">Name</th>
          <th style="width:50%;">Address</th>
          <th style="width:30%;">Pincode</th>
          <th style="width:30%;">Contact Number</th>
        </tr>

        <?php $sql = "SELECT * from hospitals";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $cnt=1;
          if($query->rowCount() > 0)
          {
            foreach($results as $result)
            {
        ?>
        <tr>
          <td><?php echo htmlentities($cnt);?></td>
          <td><?php echo htmlentities($result->name);?></td>
          <td><?php echo htmlentities($result->address);?></td>
          <td><?php echo htmlentities($result->pincode);?></td>
          <td><?php echo htmlentities($result->contact);?></td>
        </tr>
        <?php $cnt=$cnt+1;} }?>
      </table>
    </div>
  </div>
</div>

<script>

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script>
</body>
