 <?php
    include "header.php";
    include "connection.php";
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
                                <h2>Issue Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <form  name="form1" action="" method="POST">
                                    <table>
                                        <tr>
                                            <td>
                                                <select name="roll" class="form-control selectpicker">
                                                   <?php
                                                      $result= mysqli_query($conn, "select rollno from student");
                                                      while($row1= mysqli_fetch_array($result))
                                                      {
                                                          echo "<option>";
                                                          echo $row1["rollno"];
                                                          echo "</option>";
                                                      }
                                                   ?>
                                                </select>
                                            </td>
                                        
                                            <td>
                                                <input type="submit" name="bsubmit" value="Search" class="form-control btn btn-primary" style="margin: 5px">
                                            </td>
                                        </tr>
                                       
                                    </table>
                                
                                
                                <?php
                            
                                  if(isset($_POST["bsubmit"])){
                                      
                                      $result = mysqli_query($conn, "select * from student where rollno= ".$_POST['roll']."  ");
                                       
                                      if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                        $fname=$row["fname"];
                                        $sname=$row["sname"];
                                        $dept=$row["dept"];
                                       $username=$row["username"];
                                       $email=$row["email"];
                                       $contact=$row["contact"];
                                       $sem=$row["sem"];
                                       $roll=$row["rollno"];
                                   }
                                      }
                                      ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="roll no" name="roll" 
                                                   value="<?php echo $roll?>"disabled="">
                                        </td>
                                    </tr>
                                      <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student name" name="stu_name" 
                                                   value="<?php echo $fname.' '.$sname?>"required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student department" name="stu_dept" 
                                                   value="<?php echo $dept?>"required="">
                                        </td>
                                    </tr>
                                      <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student sem" name="stu_sem"   
                                                   value="<?php echo $sem?>"required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student contact" name="stu_contact"  
                                                   value="<?php echo $contact?>"required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student email" name="stu_email"  
                                                   value="<?php echo $email?>"required="">
                                        </td>
                                        <tr>
                                        <td>
                                            <select name="bookname" class="form-control selectpicker">
                                                <?php
                                                     $result= mysqli_query($conn, "select name from books");
                                                      while($row= mysqli_fetch_array($result))
                                                      {
                                                          echo "<option>";
                                                          echo $row["name"];
                                                          echo "</option>";
                                                      }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="date of issue" name="date_of_issue" 
                                                    value="<?php echo date("d-m-Y")?>"required="">
                                        </td>
                                        <tr>
                                            <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student username" name="stu_username" 
                                                    value="<?php echo $username?>" required="">
                                        </td>
                                        <tr>
                                        <tr>
                                              <td>
                                                <input type="submit" name="bsubmit2" value="Issue Book" class="form-control btn btn-success" style="margin: 5px">
                                            </td>
                                        </tr>
                                </table>
                                    
                                    <?php
                                  }
                                  
                                    ?>
                            </form>
                                <?php
                                  if(isset($_POST["bsubmit2"])){
                                      mysqli_query($conn,"insert into issuestatus (stu_rollno,stu_name,stu_dept,stu_sem,stu_contact,stu_email,book_name,date_of_issue,date_of_return,stu_username)".
                               "values ('$_POST[roll]','$_POST[stu_name]','$_POST[stu_dept]','$_POST[stu_sem]','$_POST[stu_contact]','$_POST[stu_email]','$_POST[bookname]','$_POST[date_of_issue]',' ','$_POST[stu_username]')");
                                  
                               ?>
                                <script>
                                    <div class="alert alert-success">alert("Book Issue Successful")</div>;
                                </script>
                                      <?php
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