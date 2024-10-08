<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <style>
    body{
      background-color: #f2f2f2;
    }
    .track{
      padding-top: 3%;
      text-align:center;
    }
     .carousel-item {
            position: relative;
        }
        
        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-caption {
        position: absolute;
        top: 0;
        left: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    img{
      height:fit-content;
    }
    .search{
      margin-left: 35%;
      margin-top: 20%;
      max-width: 50%;
      height: 20px;
      
      /* background-color: green; */
      
    }
    .btn-color {
        background-color: #007bff; 
        border: none; 
    }

    .btn-color:hover {
        background-color: #0056b3; 
    } 
    .left{
      position: absolute;
        top: 0;
        left: 100;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    .time{
      margin-left: 60%;
      font-size:2px
      
    }
        </style>
</head>
<body>


<?php include 'menu-nav.php'  ?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <img src="image/cargo.jpg" alt="Dhl">
  <div class="carousel-item active">
            <div class="carousel-caption">
               <?php include 'glove.php' ?>
            </div>
            <div class="time">
              <?php include 'clock.php' ?>
            </div>
            
            <div class="search">
    <div class="input-group">
      <form action="hi.php"method="post">
      <div class="input-group mb-3">
    <input class="form-control" type="search" name="tracking_number" placeholder="Enter Tracking Number" aria-label="Search">
    <div class="input-group-append">
        <input type="submit" value="Find Packet" class="btn btn-primary">
    </div>
</div>

      </form>
    </div>
</div>

        </div>
  </div>
  
  

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
  <h4 class="text-center">Fast Courier and Cargo Services<br>Birtamode, Jhapa<br>Sanischare road Dhanaraj Mini market 2nd floor room no:F127<br>023-534177, 9801376348</h4>
  <h3 class="text-center" >For more information:-</h3>
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
  <p class="p-3 bg-dark text-white text-center"><a href="index.php">@Fastbtm</a> &emsp;&emsp;&emsp;<a href="tel:+977023534177"> +977 023-534177</a>&emsp;&emsp; <a href="tel:+9779801376348">9801376348</a>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="https://www.facebook.com/p/Fast-Courier-And-Cargo-Services-Birtamod-100063864826842/" ><img src="image/fbpng.jpg" alt="Fast courier" width="50px" height="50px"> Fast Courier </a>&emsp;&emsp;&emsp;
  <a href="https://www.facebook.com/sagar.dahal.33" ><img src="image/fbpng.jpg" alt="Sagar Dahal"width="50px" height="50px"> Sagar Dahal </a>
  </p>
</footer>

</body>
</html>