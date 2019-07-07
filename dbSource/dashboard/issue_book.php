 <?php
    include "header.php";
    include "connection.php";
 ?>

        <!-- page content area main -->


        <br>
                                <center><h2>Issue Books</h2></center>

                            
                                <div style="margin: auto;  width: 95%;">  
                               
                                <form  name="form1" action="" method="POST">
                                     <center>
                                    <table>
                      
                                       
                                        <tr>
                                            <td>
                                                <select name="roll" class="form-control selectpicker">
                                                   <?php
                                                      $result= mysqli_query($conn, "select rollno from student");
                                                       echo "<option>";
                                                          echo "SELECT Student Roll No";
                                                          echo "</option>";
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
                                                <input type="submit" name="bsubmit" value="Search" class="form-control btn btn-default" style="margin: 5px">
                                            </td>
                                        </tr>
                                       
                                    </table>
                                     </center>
                                    <br>
                                <?php
                                global $roll;
                                  if(isset($_POST["bsubmit"])){
                                      
                                      $result = mysqli_query($conn, "select * from student where rollno= ".$_POST['roll']."  ");
                                       
                                      if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                       
                                       $roll=$row["rollno"];
                                        $fname=$row["fname"];
                                        $sname=$row["sname"];
                                        $dept=$row["dept"];
                                       $username=$row["username"];
                                       $email=$row["email"];
                                       $contact=$row["contact"];
                                       $sem=$row["sem"];
                                       
                                   }
                                      }
                                      ?>
                             
                                <table class="table  table-dark table-bordered">
                                    <tr style="font-size:140%;text-align: center;background-color: white;color: black;">
                                        <th>Student Details</th>
                                        <th>Student Data</th>
                                        </tr>
                                    <tr>
                                        <td style="text-align: center"><label>Student Roll No</label></td>
                                        <td>
                                            <input type="text" name="stu_rollno"  class="form-control"  
                                                   value="<?php echo $roll?>" required="" readonly="" >
                                        </td>
                                    </tr>
                                      <tr>
                                           <td style="text-align: center"><label>Student Name</label></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student name" name="stu_name" 
                                                   value="<?php echo $fname.' '.$sname?>"required="">
                                        </td>
                                    </tr>
                                    <tr>
                                         <td style="text-align: center"><label>Student Discipline</label></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student department" name="stu_dept" 
                                                   value="<?php echo $dept?>"required="">
                                        </td>
                                    </tr>
                                      <tr>
                                           <td style="text-align: center"><label>Student Semester</label></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student sem" name="stu_sem"   
                                                   value="<?php echo $sem?>"required="">
                                        </td>
                                    </tr>
                                    <tr>
                                         <td style="text-align: center"><label>Student Contact</label></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student contact" name="stu_contact"  
                                                   value="<?php echo $contact?>"required="">
                                        </td>
                                    </tr>
                                    <tr>
                                         <td style="text-align: center"><label>Student Email</label></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student email" name="stu_email"  
                                                   value="<?php echo $email?>"required="">
                                        </td>
                                        <tr>
                                             <td style="text-align: center"><label>Book to be Issued</label></td>
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
                                         <td style="text-align: center"><label>Date of Issue</label></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="date of issue" name="date_of_issue" 
                                                    value="<?php echo date("d-m-Y")?>"required="">
                                        </td>
                                        <tr>
                                            <tr>
                                                 <td style="text-align: center"><label>Student Username</label></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="student username" name="stu_username" 
                                                   value="<?php echo $username?>" required="" readonly="">
                                        </td>
                                        <tr>
                                        <tr style="background-color:#fcf8e3">
                                            <td colspan="2">
                                        <input type="submit" name="bsubmit2" value="Issue Book" class="form-control btn btn-info" style="color: white">
                                            </td>
                                        </tr>
                                </table>
                         
                                    <?php
                                  }
                                  
                                    ?>
                            </form>
                                      </center>
                                <?php
                                  
                                  if(isset($_POST["bsubmit2"])){
                                      mysqli_query($conn,"insert into issuestatus (	stu_rollno,stu_name,stu_dept,stu_sem,"
                                              . "stu_contact,stu_email,book_name,date_of_issue,date_of_return,stu_username)".
                               "values ('$_POST[stu_rollno]','$_POST[stu_name]','$_POST[stu_dept]'"
                                              . ",'$_POST[stu_sem]','$_POST[stu_contact]','$_POST[stu_email]','$_POST[bookname]',"
                                              . "'$_POST[date_of_issue]',' ','$_POST[stu_username]')");
                                      mysqli_query($conn, "update  books set available=available-1 where name='$_POST[bookname]' ");
                                  
                               ?>
                                <script>
                                alert("Book Issue Successful");
                                </script>
                                      <?php
                                  }
                                ?>
                                
</div>             


        <?php 
         include "footer.php";
        ?>