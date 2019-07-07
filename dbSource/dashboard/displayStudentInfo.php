 <?php
    include "header.php";
    include"connection.php";
 ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <center><h2>Registered Students Details</h2></center>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="POST">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><select name="dept" class="form-control">
                                                     <?php
                                                      $result= mysqli_query($conn, "select distinct dept from student ");
                                                      if(result){
                                                           echo "<option>";
                                                          echo "Select Department Here";
                                                          echo "</option>";
                                                          while($row1= mysqli_fetch_array($result))
                                                      {
                                                             
                                                          echo "<option>";
                                                          echo $row1["dept"];
                                                          echo "</option>";
                                                      }
                                                      }
                                                     ?>
                                                    <option></option>
                                                </select></td>
                                                <td>
                                                     <input type="submit" name="bsubmit" value="Search" class="form-control btn btn-info" >
                                                </td>
                                        </tr>
                                    </table>
                                </form>
                                
                                <?php
                                  if(isset($_POST["bsubmit"])){
                                       $result= mysqli_query($conn, "select * from student where dept='$_POST[dept]' ");
                                                      if($result){
                                                           echo"<table class='table table-bordered table-striped '>";
                                                           echo "<tr>";
                                                           echo "<th>" ;echo "FirstName" ;echo "</th>";
                                                           echo "<th>" ;echo "LastName" ;echo "</th>";
                                                            echo "<th>" ;echo "Department" ;echo "</th>";
                                                            echo "<th>" ;echo "UserName" ;echo "</th>";
                                                            echo "<th>" ;echo "Email" ;echo "</th>";
                                                            echo "<th>" ;echo "Contact" ;echo "</th>";
                                                            echo "<th>" ;echo "Semester" ;echo "</th>";
                                                           
                                                           echo "<th>" ;echo "RollNo" ;echo "</th>";  
                                                           echo "<th>" ;echo "Status" ;echo "</th>"; 
                                                              echo "<th>" ;echo "Approve" ;echo "</th>"; 
                                                                 echo "<th>" ;echo "Not Approve" ;echo "</th>"; 
                                                               echo"</tr>";
                                                          while($row1= mysqli_fetch_array($result)){
                                                              echo "<tr>";
                                                               echo "<td>" ;echo $row1["fname"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["sname"] ;echo "</td>";
                                                                echo "<td>" ;echo $row1["dept"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["username"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["email"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["contact"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["sem"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["rollno"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["status"]; echo "</td>";
                                                               echo "<td>" ;?> <a href="approve.php? sid=<?php echo $row1["sid"];?>">Approve</a> <?php echo "</td>";
                                                               echo "<td>" ;?> <a href="notapprove.php? sid=<?php echo $row1["sid"];?>">Not Approve</a> <?php echo "</td>";
                                                               
                                                               echo"</tr>";
                                                          }
                                                          echo"</table>"; 
                                  }
                                  }     
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <?php 
         include "footer.php";
        ?>