<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Portal</title>

    
    
    <!-- Latest compiled and minified CSS -->
           <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
           
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body >
<div class="container">

  <form class="well form-horizontal" name="form1" action=" " method="post" >
  <fieldset>

      <!-- Form Name -->
      <center> <h1 style="font-family: 'Lobster', cursive;"><b>Student Registration Form</b></h1></center>

      <br>
      
      
      <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="fname" placeholder="First Name" class="form-control"  type="text"  required="">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label" >Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="same" placeholder="Last Name" class="form-control"  type="text"  required="">
                    </div>
                    </div>
                    </div>


                    <div class="form-group">
                    <label class="col-md-4 control-label">Department</label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="dept" class="form-control selectpicker" >
                      <option value="">Select your Department</option>
                      <option>CSE</option>
                      <option>ECE</option>
                      <option >EE</option>
                      <option >ME</option>
                      <option >CE</option>

                    </select>
                    </div>
                    </div>
                    </div>










                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="username" placeholder="Username" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>





                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label" >Password</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="password" placeholder="Password" class="form-control"  type="password">
                    </div>
                    </div>
                    </div>


                    <!-- Text input-->
                       <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>





                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">Contact No.</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input name="contact" placeholder="(+91)" class="form-control" type="text">
                    </div>
                    </div>
                    </div>

                  <!-- Text input -->

                      <div class="form-group">
                        <label class="col-md-4 control-label">SEM</label>
                        <div class="col-md-4 inputGroupContainer">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                            <input type="text" class="form-control" placeholder="SEM" name="sem" required=""/>
                          </div>
                        </div>
                      </div>


                      <!-- Text input-->
                         <div class="form-group">
                      <label class="col-md-4 control-label">Roll No</label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                          <input type="text" class="form-control" placeholder="Roll No" name="rollno" required=""/>
                      </div>
                      </div>
                     </div>

                    <div>
                        <input type="hidden" name="form_submitted" value="1" />
                        <!--it is a hidden value which is used to check whether the form has been submitted or not-->
                    </div>
                      
                      
                     <!-- Button -->
                    <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="bsubmit" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                    </div>
                     

      
   
                    <?php
                      if(isset($_POST['bsubmit'])){
                          
                           global $a,$b,$c,$d,$e,$f,$g,$h,$k;
                                if  ($_SERVER['REQUEST_METHOD']=='POST'){
                                   
                                   if(isset($_POST['fname']))
                                         $a=$_POST["fname"];
                                   if(isset($_POST['sname']))
                                          $b=$_POST["sname"];
                                   if(isset($_POST['dept']))
                                          $k=$_POST["dept"];
                                   if(isset($_POST['username']))
                                           $c=$_POST["username"];
                                   if(isset($_POST['password']))
                                          $d=$_POST["password"];
                                    if(isset($_POST['email']))
                                          $e=$_POST["email"];
                                     if(isset($_POST['contact']))
                                          $f=$_POST["contact"];
                                      if(isset($_POST['sem']))
                                          $g=$_POST["sem"];
                                       if(isset($_POST['rollno']))
                                          $h=$_POST["rollno"];
                                        
                                }
                  
                        $servername= 'localhost';//machine where mysql is hosted
                        $username= 'root';
                        $password= '';
                        $dbname= 'library';

                        $conn= new mysqli($servername, $username, $password, $dbname);
                          
                           // Check connection
                     if (!$conn)
                       {
                       die('Connection failed' .$conn->connect_errno);
                       }
                       
                      $sql= mysqli_query($conn,"insert into student(fname,sname,dept,username,password,email,contact,sem,rollno)".
                               "values ('$a','$b','$k','$c','$d','$e','$f','$g','$h')");
                        
                       
                        ?>
                           <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Registration  <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
                
</fieldset>
              </form>

</div>


        <?php
                      }
          
        ?>               
        

                   
    

    


</body>
</html>
