
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Student Login</title>

  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<body >
    <div class="container" style="padding-left: 250px;padding-right: 250px; margin-top:200px; " >
  <form class="well form-horizontal" name="form1" action=" " method="post" >
  <fieldset>

      <!-- Form Name -->
      <center> <h1 style="font-family: 'Lobster', cursive;"><b>Login</b></h1></center>

      <br>



                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name="user_name" placeholder="Username" class="form-control"  type="text">
                    </div>
                    </div>
                    </div>

                    <!-- Text input-->

                    <div class="form-group">
                    <label class="col-md-4 control-label" >Password</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="user_password" placeholder="Password" class="form-control"  type="password">
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
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="bsubmit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                    </div>
   </fieldset>
       <?php
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
if(isset($_POST['bsubmit']))
{   

    $username = mysqli_real_escape_string($conn,$_POST['user_name']);
    $password = mysqli_real_escape_string($conn,$_POST['user_password']);

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from student where username='".$username."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: registration.php');
        }else{
            echo "Invalid username and password";
        }

    }

   

}


?>
      </form>
                   
                

              

</div>
        <!-- /.container -->

        


</body>
</html>

