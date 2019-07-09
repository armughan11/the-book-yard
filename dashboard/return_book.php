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
                                <center><h2>Return Books</h2></center>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="POST">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><select name="roll" class="form-control">
                                                     <?php
                                                      $result= mysqli_query($conn, "select distinct stu_rollno from issuestatus where date_of_return=' ' ");
                                                      if(result){
                                                          echo "<option>";
                                                          echo "SELECT ROLLNO";
                                                          echo "</option>";
                                                          while($row1= mysqli_fetch_array($result))
                                                      {
                                                          echo "<option>";
                                                          echo $row1["stu_rollno"];
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
                                       $result= mysqli_query($conn, "select * from issuestatus where stu_rollno='$_POST[roll]' ");
                                                      if($result){
                                                           echo"<table class='table table-bordered table-striped'>";
                                                           echo "<tr>";
                                                           echo "<th>" ;echo "RollNo" ;echo "</th>";
                                                           echo "<th>" ;echo "Name" ;echo "</th>";
                                                            echo "<th>" ;echo "Department" ;echo "</th>";
                                                            echo "<th>" ;echo "Semester" ;echo "</th>";
                                                            echo "<th>" ;echo "Email" ;echo "</th>";
                                                            echo "<th>" ;echo "Contact" ;echo "</th>";
                                                            echo "<th>" ;echo "Book Name" ;echo "</th>";
                                                           echo "<th>" ;echo "Date of Issue" ;echo "</th>";  
                                                           echo "<th>" ;echo "Return Book" ;echo "</th>"; 
                                                               echo"</tr>";
                                                          while($row1= mysqli_fetch_array($result)){
                                                              echo "<tr>";
                                                               echo "<td>" ;echo $row1["stu_rollno"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["stu_name"] ;echo "</td>";
                                                                echo "<td>" ;echo $row1["stu_dept"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["stu_sem"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["stu_contact"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["stu_email"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["book_name"] ;echo "</td>";
                                                               echo "<td>" ;echo $row1["date_of_issue"] ;echo "</td>";
                                                               echo "<td>" ;?>
                                <a href="return.php ? id=<?php echo $row1["id"] ;?>">Return Book</a>
                                    <?php
                                    echo "</td>";
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