<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="images/logo.ico"/>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>



<style>
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

* {box-sizing: border-box;}


.header {
  overflow: hidden;
 background-image: linear-gradient(-90deg, red,#f1f1f1 );
  padding: 20px 10px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: none;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: center;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;


}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}




.foot-links{
  list-style: none;
  padding: 0px;
}
.foot-links>li>a{
  color: black;
}
.foot-links2>a{
  color: black;
}
@media (max-width:500px){
  footer *{
    text-align: center !important;
  }
}

/* Footer */
footer{
	width: 100%;
	height:400px;
	top: 1980px;
	background-color:#ece8e5;
}
footer>div{
	position: relative;
	width: 100%;
	height: 100%;
}
footer>div>*{
	position: absolute;
}

footer> h3> {
	left: 15px;
	top: 40px;

}

footer a{
	color: black;
	text-decoration: none;
}
footer a:hover{
	color: blue;
	text-decoration: underline;

}

</style>

</head>
<body>

  <div class="header">
     <div class="container">
         <div class="raw">
            <div class="col-md-5">
                 <a href="#default" class="logo">
                     <img src="logo.png" alt="">
                 </a>
            </div>
            <div class="header-right">
          <div class="col-md-7">
            <a  href="#">Home</a>
            <a href="#contact">catergories</a>
            <a href="#contact">Breaking news </a>
            <a href="#contact">About Us  </a>
            <a href="#contact">contact Us  </a>
            <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
            <a href="#contact">Login </a>
            <a href="LoginNews.php">Register </a>

          </div>

        </div>
     </div>
  </div></div>

<!--table1 news-->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>
<!--news heading-->
        <?php
      $con = mysqli_connect("localhost","root","");
       if (!$con)
         {
            die("Could not connect: " . mysqli_error($con));
        }

      $db=mysqli_select_db ($con,"news");
      $query = "SELECT title FROM title1";
      $result = mysqli_query($con,$query);

    while($Row=mysqli_fetch_assoc($result)) {
         echo $Row["title"]."&nbsp";
          echo "<br>";
      }
      mysqli_close($con);
       ?>
     </h2>

      <h5>
        <!--end heading-->

        <!--start description-->
        <?php
      $con = mysqli_connect("localhost","root","");
       if (!$con)
         {
            die("Could not connect: " . mysqli_error($con));
        }

      $db=mysqli_select_db ($con,"news");
      $query = "SELECT description FROM  title1";
      $result = mysqli_query($con,$query);

    while($Row=mysqli_fetch_assoc($result)) {
         echo $Row["description"]."&nbsp";
          echo "<br>";
      }
      mysqli_close($con);
       ?>
      </h5>
      <!--end description-->

      <!--news date-->

      <div class="fakeimg" style="height:200px;">Image</div>

      <p><?php
    $con = mysqli_connect("localhost","root","");
     if (!$con)
       {
          die("Could not connect: " . mysqli_error($con));
      }

    $db=mysqli_select_db ($con,"news");
    $query = "SELECT date FROM   title1";
    $result = mysqli_query($con,$query);

  while($Row=mysqli_fetch_assoc($result)) {
       echo $Row["date"]."&nbsp";
        echo "<br>";
    }

    mysqli_close($con);
     ?></p>
     <!--end news date-->

     <!--start article-->

     <p><?php
   $con = mysqli_connect("localhost","root","");
    if (!$con)
      {
         die("Could not connect: " . mysqli_error($con));
     }

   $db=mysqli_select_db ($con,"news");
   $query = "SELECT article FROM  title1";
   $result = mysqli_query($con,$query);

 while($Row=mysqli_fetch_assoc($result)) {
      echo $Row["article"]."&nbsp";
       echo "<br>";
   }

   mysqli_close($con);
    ?></p>
    <!--end article-->

    <!--reporter name-->

    <h6><?php
  $con = mysqli_connect("localhost","root","");
   if (!$con)
     {
        die("Could not connect: " . mysqli_error($con));
    }

  $db=mysqli_select_db ($con,"news");
  $query = "SELECT reporter FROM  title1";
  $result = mysqli_query($con,$query);

while($Row=mysqli_fetch_assoc($result)) {
     echo $Row["reporter"]."&nbsp";
      echo "<br>";
  }

  mysqli_close($con);
   ?></h6>

    </div>

 <!--start news table2-->
    <div class="card">
   <!--reporter name-->
      <h2> <?php
    $con = mysqli_connect("localhost","root","");
     if (!$con)
       {
          die("Could not connect: " . mysqli_error($con));
      }

    $db=mysqli_select_db ($con,"news");
    $query = "SELECT reporter FROM  table2";
    $result = mysqli_query($con,$query);

  while($Row=mysqli_fetch_assoc($result)) {
       echo $Row["reporter"]."&nbsp";
        echo "<br>";
    }

    mysqli_close($con);
     ?><br></h2>
 <!--start description-->
      <h5><?php
    $con = mysqli_connect("localhost","root","");
     if (!$con)
       {
          die("Could not connect: " . mysqli_error($con));
      }

    $db=mysqli_select_db ($con,"news");
    $query = "SELECT description FROM  table2";
    $result = mysqli_query($con,$query);

  while($Row=mysqli_fetch_assoc($result)) {
       echo $Row["description"]."&nbsp";
        echo "<br>";
    }
    mysqli_close($con);
     ?></h5>
     <!--end description-->
 <!--image display-->
      <div class="fakeimg" style="height:200px;">

</div>




    </div>
  </div>

  <!--site description-->
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>

    </div>

    <!--image table-->
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">
        <!--image1-->
        <h3>image1</h3>

 <!--image2-->
      </div><br>
      <div class="fakeimg"><h3>image2</h3>
      </div><br>
      <!--image3-->
      <div class="fakeimg"><h3>image3</h3>
      </div>
    </div>

   <!--signup form -->
    <div class="card">
      <h3>SignUP to Newsbox...</h3>

    </div>
  </div>
</div>


<footer class="container-fluid" style="background-color: #ece8e5; padding-top: 35px;font-size: 75%; padding-bottom:10px; ">
           <div class="row">
               <div class="col-md-5">
                  <img src="images/icons/fb.png" style="margin-bottom: 5px;">
                  <img src="images/icons/g+.png" style="margin-bottom: 5px;" >
                  <img src="images/icons/twitter.png" style="margin-bottom: 5px;">
                  <img src="images/icons/youtube.png" style="margin-bottom: 5px;">
           </div>
             <div class="col-md-5">
               Download our Apps
                 <img src="images/icons/apple.png">
                 <img src="images/icons/android.png">
          </div>
                   <div class="col-md-2">
                   <img src="images/dilivery.png" class="img-responsive"></div>
           </div>
<hr style="border:none;background:radial-gradient(gray,transparent,transparent);height: 3px;"/>

           <div class="row">
        <div class="col-md-2">
        <h4>Contact us</h4>
        <p>Call us 8.30 a.m.-midnight,7 days a <br> week, on 011xxxxxxx<br><br>Email us ai info@harvest.lk</p>
        </div>
        <div class="col-md-2">
        <h4> Customer Service</h4>
        <ul class="foot-links">
<li>Frequently asked questions</li>
<li>Terms and conditions</li>
<li>Privacy policy</li>
<li>Security policy</li>
<li>Recycling Information</li>
<li>Accessibility Statement</li>
</ul> </div>

        <div class="col-md-2">
        <h4> About Us</h4>
        <ul class="foot-links">
<li>Investor Centre</li>
<li>Corporate Responsibility</li>
<li>Media Centre</li>
<li>Contact Us</li>
<li>Affiliate Program</li>
<li>Corporate</li>
</ul>  </div>

        <div class="col-md-2">
        <h4>Coparate</h4>
<ul class="foot-links">
<li>Working for us</li>
<li>Ocado Technology</li>
<li>Driver vacancies</li>
<li>Warehouse vacancies</li>
<li>Head Office</li>
<li>Locations</li>
</ul></div>

</div>
<div class="row">
<div class="col-md-12">
If we don't stock what you are looking for, try sending us a <b>product request</b>
</div>
</div>
<hr style="border:none;background:radial-gradient(gray,transparent,transparent);height: 3px;"/>


  <div class="row">
  <div class="col-md-4 " >

    &copy; 2017 All rights Resereved.Harvwst  Super Limited </div>
       <div class="col-md-8 foot-links2" >


         <a href="#">   Corporate</a>   <a href="#">   Careers</a>     <a href="#">    Sitemap</a>     <a href="#">   Terms of Use</a>   <a href="#">    Modern Slavery Act statement</a>  <a href="#">     New Cookie policy</a>


         </div>
         </div>






</footer>




</body>
</html>
