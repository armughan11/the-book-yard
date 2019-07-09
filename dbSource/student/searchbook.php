<?php
    include "header.php";
    include "connection.php";
 ?>

<!--add your code here-->
<br>
  <center>  <h1 style="background-color: #0c5460; padding: 10px;width: 45%;border: 1px groove #000;color: #fff">
          Find A Book</h1></center>
                                <br>
<form action="searchbook.php" method="GET" style="margin-top:10px ;padding: 10px;">
    <input type="text" name="search" placeholder="Enter Search Query"/>
<input type="submit" name="submit"/>
</form>
                                <br>
<div class="row">
	<?php
        
        echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
				//Table header
				
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Cover";  echo "</th>";
				
                                                                             echo "<th>"; echo "Category";  echo "</th>";
				echo "<th>"; echo "Availability";  echo "</th>";
				
				
			echo "</tr>";
                        
	if(isset($_GET['submit']) && $_GET['search']!== ''){
	
	$search_query = $_GET['search'];
	$query = "select * from book_store where book_name like '%$search_query%'";
	$result = mysqli_query($conn,$query);
        if($result){
	while($row=mysqli_fetch_assoc($result)) {
			$img = $row['book_image'];
			
                        
			echo "<tr>";
				
				echo "<td>"; echo $row['book_name']; echo "</td>";
                                                                               echo "<td>"; echo "<img src='img/$img' class='book img-responsive' style='height: 200px;width: 200px;'/>"; echo "</td>";
				
				echo "<td>"; echo $row['category']; echo "</td>";
				
                                                                                echo "<td>"; echo $row['available']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
        }else{
            echo 'Not Available';
        }          
  }
?>
</div>

  <?php 
         include "footer.php";
        ?>