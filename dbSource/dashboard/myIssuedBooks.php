 <?php
 session_start();
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
                                <h2>My Issued Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-responsive">
                                    <th>Student Roll No</th>
                                     <th>Book Name</th>
                                   <th>Book Issue Date</th>
                                    <?php
                                     if(isset($_SESSION['username'])){
                                         //$a=$_SESSION['username'];
                                     // echo $a;       it's working and getting username from login page
                                    
                                 
                                    $result=mysqli_query($conn,"select  stu_rollno,book_name,date_of_issue from issuestatus"
                                            . " where stu_username='$_SESSION[username]' ");
                                   
                                  if( $result ){
                              // success! check results
                                       if ($result->num_rows > 0){
                                            while(  $row=mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td>";
                                                echo $row["stu_rollno"];
                                                echo "</td>";
                                              
                                                echo "<td>";
                                                echo $row["book_name"];
                                                echo "</td>";
                                               
                                                echo "<td>";
                                                echo $row["date_of_issue"];
                                                echo "</td>";
                                             
                                        }
                                  }else{
                                      echo "No books issued";
                                  }  
                                }   
                                     }
                                     ?>
                                </table>
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