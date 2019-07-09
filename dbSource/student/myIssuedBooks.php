 <?php
 session_start();
    include "header.php";
    include "connection.php";
 ?>

        <!-- page content area main -->
        

                    

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <br>
                                <center>  <h1 style="background-color: #0c5460; padding: 10px;width: 45%;border: 1px groove #000;color: #fff">My Issued Books</h1></center>
                                <br>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered">
                                    <tr style="background-color: #fff">
                                    <th>Student Roll No</th>
                                     <th>Book Name</th>
                                     <th>Book Issue Date</th>
                                     <th>No Of Days Since Issue</th>
                                     <th>Fine Amount</th>
                                     <th>Pay Fine</th></tr>
                                    <?php
                                     function dateDiff($date1, $date2) 
                                                        {
                                                          $date1_ts = strtotime($date1);
                                                          $date2_ts = strtotime($date2);
                                                          $diff = $date2_ts - $date1_ts;
                                                          return round($diff / 86400);
                                                        }
                                     if(isset($_SESSION['username'])){
                                         //$a=$_SESSION['username'];
                                     // echo $a;       it's working and getting username from login page
                                    
                                 
                                    $result=mysqli_query($conn,"select  distinct stu_rollno,book_name,date_of_issue,date_of_return from issuestatus"
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
                                                
                                                                                              
                                                echo '<td>';
                                                $date1= $row["date_of_issue"];
                                                $date2=$row["date_of_return"];
                                               
                                                        $dateDiff= dateDiff($date1, $date2);
                                                        echo $dateDiff;
                                                        print "</br>";
                                                echo"</td>";
                                                
                                                echo '<td>';
                                                
                                               
                                                       
                                                        if ($dateDiff > 30){
                                                            echo ($dateDiff -30) *5;
                                                        }
                                                        print "</br>";
                                                echo"</td>";
                                                
//                                                echo "<td>";
//                                                echo '<div class="razorpay-embed-btn" data-url="https://rzp.io/l/X3urgoW" data-text="Pay Now" data-color="#528FF0" data-size="large">
// 
//</div>';                                          echo "</td>";
                                echo '<td>';
                                echo'<a class="btn btn-primary" href="https://rzp.io/l/X3urgoW">Pay Now</a>';
                                echo '</td>';
                                               
                                             
                                        }
                                  }else{
                                      echo '<center><h2 style="background-color: red">No books issued</h2></center>';
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


         <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>NIIT Project&copy; 2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Made with <span style="color: #e25555;">&#9829;</span> in India</p>

            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
