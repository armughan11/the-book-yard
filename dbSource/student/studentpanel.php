<?php
 include 'connection.php';
    include "header.php";
   
 ?>

<!--add your code here-->
 <br>
              <br>
      <!-- card Section-->
          <div class="row">
  <div class="column">
       <div class="card">
           <a href="searchbook.php"><i class="fa fa-search" style="font-size:160px;color:gray"></i> </a>
             <br>
           <h4 class="text-dark"> Find Book</h4></div>
  </div>
 
  <div class="column">
    <div class="card">
        <a href="myIssuedBooks.php"><i class="fa fa-book" style="font-size:160px;color:gray"></i> </a>
        <br>
        <h4 class="text-dark">My Issued Books</h4></div>
  </div>
  
</div>
      <!--card section-->


  <?php 
         include "footer.php";
        ?>