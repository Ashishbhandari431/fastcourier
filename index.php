<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>

</head>
<body>


<?php include 'menu-nav.php'  ?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/c1.jpg" alt="Dhl" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/c2.jpg" alt="Fedex" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/c4.jpg" alt="Truck" width="1100" height="500">
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5 abt">
<div class="py-5" id="abt">
  <h3 class="text-center" >About Us</h3>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
       <img src="image/c5.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
    <div >
  <h1>About Fast Courier</h1>
</div>

       <h4 class="py-3">Fast Coureir & Cargo services is the first 
        courier services in birtamode with the 30 years plus 
        working experience with fastest and safest services</h4>
        <a href="about.php" class="btn btn-success">Check More</a>
    </div>
  </div>
  </div>
<script>
  function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
  }
</script>
</section>

<section class="my-5 service">
<div class="py-5"id="service">
  <h3 class="text-center" >Our Services</h3>
 
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card"  >
        <img class="card-img-top" src="image/c7.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Domestic Courier </h4>
           <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card"  >
        <img class="card-img-top" src="image/c8.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">International Courier </h4>
           <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card"  >
        <img class="card-img-top" src="image/c9.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">International Cargo </h4>
            <a href="#" class="btn btn-primary ">See Profile</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
<div class="py-5" id="contact">
  <h3 class="text-center" >Contact us</h3>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username:</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id:</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile:</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments:</label>
        <textarea class="form-control " name="comments"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <h2 class="text-center">Location:</h2>
  <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.1496842512006!2d87.9893272752146!3d26.643689476808532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5ba5fd0eb3ca5%3A0x801d5f61194f89b6!2sFast%20courier%20and%20cargo%20service!5e0!3m2!1sen!2snp!4v1716858023114!5m2!1sen!2snp" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </center>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@Fastbtm &emsp;&emsp;&emsp;023-534177&emsp;&emsp;9801376348
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="https://www.facebook.com/p/Fast-Courier-And-Cargo-Services-Birtamod-100063864826842/" >Facebook </a>&emsp;&emsp;&emsp;
  <a href="https://www.facebook.com/sagar.dahal.33">Sagar Dahal</a>
  </p>
</footer>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>