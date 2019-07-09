<?php
 session_start();
  include 'connection.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Library Dashboard</title>
   
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
   <style>
        * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
    </style>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
           <?php
                                     if(isset($_SESSION['username'])){
                                         $a=$_SESSION['username'];
//                                      echo "Hello " .$a;   
                                       $result=mysqli_query($conn,"select  distinct fname,sname from student"
                                            . " where username='$_SESSION[username]' "); 
                                       if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                       
                                   
                                        $fname=$row["fname"];
                                        $sname=$row["sname"];
                                       
                                        echo '<p><div class="sidenav-header-inner text-center"><img src="img/av.jpg" alt="person"
            class="img-fluid rounded-circle"></p>';
                                        
                                        echo"<p>";
                                       echo $fname.' '.$sname;
                                       echo"</p>";
                                       
                                       echo"</div>";
                                   }
                                      }
                                     }
                                  ?>    
<!--        
          
            
          -->
         
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="studentpanel.php" class="brand-small"><img src="img/Books-icon.png" alt="books"> </a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">

          <ul id="side-main-menu" class="side-menu list-unstyled">
              <li><a href="studentpanel.php"> <i class="icon-home"></i>Home  </a></li>
              <li><a href="myIssuedBooks.php"> <i class="icon-grid"></i>My Issued Books                           </a></li>
            
            <li><a href="searchbook.php"> <i class="fa fa-search"></i>Book Search                           </a></li>
          

              </ul>
            </li>
            <!-- <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li> -->
           
          </ul>
        </div>

      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="studentpanel.php" class="navbar-brand">
                      <div class="brand-text d-none d-md-inline-block" style="font-family: Lucida Handwriting"><strong class="text-light">The Book Yard Student Zone</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                <!-- Log out-->
                <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>