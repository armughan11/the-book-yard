<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>My Landing Page Demo</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
       <nav>
          <ul class="topnav" id="dropdown-click">
              <li class="active"><a href="home.html">Home</a></li>
      
      <li><a href="rules.html">Rules</a></li>
      <li><a href="contact.html">Contact Us</a></li>
           <li class="topnav-right"><a href="#signup">SIGN UP</a></li>
           <li class="topnav-right"><a href="#signin">SIGN IN</a></li>
        <li class="dropdown-icon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
        </ul>

        </nav>

       <div class="container">

       </div>




         <script>
          function dropdownMenu(){
              var x= document.getElementById("dropdown-click");
              if(x.className=== "topnav"){
                  x.className+= " responsive";
              }
              //changing topnav to topnav.responsive
              else{
                  x.className="topnav";
              }
          }
        </script>

    </body>
