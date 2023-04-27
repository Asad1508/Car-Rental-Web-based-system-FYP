<html>
<head>
    <link rel="stylesheet" href="../css/all.css">
    <style>
    .header_style2 {
  box-shadow: 0 0 24px rgba(0, 0, 0, 0.3);
  background:#fff;
  transition-duration:0.3s;
   -moz-transition-duration:0.3s;
    -o-transition-duration:0.3s;
     -webkit-transition-duration:0.3s;
      -ms-transition-duration:0.3s;
}
.header_style2 #navigation_bar {
  background: #fff;
  text-align:center;
}
.header_style2 .navbar-default .navbar-nav > li {
	margin:0;
}
.header_style2 .navbar-default .navbar-nav > li > a {
  color: #6960EC;
  padding:30px 18px;
}
.header_style2 .user_login i {
	font-size:24px;
	color:#6960EC;
}
.header_style2 .logo {
  margin: 20px 0;
}
.header_style2 .user_login {
  margin: 29px 10px 20px 0;
}
.header_style2 .login_btn {
  margin: 28px 0;
}
.header_style2 .navbar-default .navbar-nav > li.dropdown > a::after {
  right: 0;
}
.header_style2 .navbar-nav > li, .header_style2 .navbar-nav {
  display: inline-block;
  float: none;
}
.header_style2 .navbar-default .navbar-nav > li.dropdown > a::after {
  top: 34%;
}

@media (min-width:992px) {
.header_style2 #navigation.collapse.navbar-collapse {
  display: inline-block !important;
  float: none;
  width: auto !important;
}
.header_style2 {
  padding:6px 0;
}

}

.header_style2.nav-stacked.affix {
	padding:0px;
}
/*        marquee*/
        marquee{
            text-align: center;
            background: radial-gradient(skyblue,blue);
            box-shadow: 15px 8px 5px black;
        }
        marquee h1{
            text-shadow: 12px 10px 10px black;
        }
        .bord{
            text-shadow: 4px 4px 5px white;
            transition: 1s;
            background:linear-gradient(blue,lightblue,darkblue);
            width: 100%;
            height: 70px;
            
        }
        .bord:hover{
            transform: scale(1.1);
            text-shadow: 3px 3px 4px black;
            font-weight: bold;
        }
        .bord h1{
            font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", "sans-serif";
            letter-spacing: 2px;
        }
        
    </style>
    </head>
<body>
    
  
<header>
<center><marquee behavior='alternate' direction='up' width='100%' hspace='0px' bgcolor='#1507C9' ><h1 style=" padding-bottom: 40px;color: aliceblue; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'">Welcome To Online Car rental  </div> </h1></marquee></center>
   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
    
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">sign in/signup</a> </div>
<?php }
else{

echo "<div class='bord'>";
echo "<center><h1><span style='color:red'> Pakistan Best Car </span><span style='color:green'><i class='fas fa-car'></i> Rental Company</span></h1></center>";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Testimonial</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>

          <li><a href="page.php?type=aboutus"><i class="fab fa-app-store-ios"></i>About Us</a></li>
          <li><a href="car-listing.php"><i class="fas fa-car"></i>Car categories</a>
          <li><a href="page.php?type=faqs"><i class="fas fa-question"></i>Questions</a></li>
          <li><a href="contact-us.php"><i class="fas fa-phone"></i>Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
  </body>
</html>