 <?php
    include "header.php";
    include"connection.php";
 ?>

        <!-- page content area main -->
        

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                               <br>

<center><h1 style="background-color: #0c5460; padding: 10px;width: 45%;border: 1px groove #000;color: #fff">Registered Student Details</h1></center>


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