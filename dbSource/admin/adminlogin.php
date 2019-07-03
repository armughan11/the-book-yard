<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
         <!-- Latest compiled and minified CSS -->
         
         <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display&display=swap" rel="stylesheet">
          
           
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            
            <style>
                .modal-content{
			background-color: darkcyan;
		}
		.btn-link{
			color:white;
		}
		.modal-heading h1{
			color:#ffffff;
		}

            </style>
    </head>
    <body>
      <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
                            <h1 class="text-center" style="font-family: 'DM Serif Display', 'serif'">Login</h1>
			</div>
			<hr />
			<div class="modal-body">
				<form action="" role="form">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
                                                    <input name="username" type="text" class="form-control" placeholder="User Name"  required=""/>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
                                                    <input name="password" type="password" class="form-control" placeholder="Password" required=""/>

						</div>

					</div>

					<div class="form-group text-center">
						<button  name="bsubmit" type="submit" class="btn btn-success btn-lg">Login</button>
						<a href="#" class="btn btn-link">forget Password ?</a>
					</div>

			
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

                            $username = mysqli_real_escape_string($conn,$_POST['username']);
                            $password = mysqli_real_escape_string($conn,$_POST['password']);

                            if ($username != "" && $password != ""){

                                    $sql_query = "select count(*) as cntUser from admin where username='".$username."' and password='".$password."'";
                                    $result = mysqli_query($conn,$sql_query);
                                    $row = mysqli_fetch_array($result);

                                    $count = $row['cntUser'];

                                if($count > 0){
                                    $_SESSION['username'] = $username;
                                    header('Location: registration.php');//for now only for test
                                }else{
                                    
                                    ?>
                                    <div class="alert alert-danger col-lg-6 col-lg-push-3">
                                            <strong style="color:white">Invalid</strong> Username Or Password.
                                        </div>
                                    <?php
                                }

                            }



            }


        ?>
      </form>
                   
                

              

			</div>
		</div>
	</div>

    </body>
</html>
