<?php
  include "connection.php";
  include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
</head>
<body>
    <br>
 
<center><h2 style="background-color: #0c5460; padding: 10px;width: 45%;border: 1px groove #000;color: #fff">List Of Books</h2></center>
   <br>
	<?php

	

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Cover";  echo "</th>";
				echo "<th>"; echo "ISBN";  echo "</th>";
                                                                             echo "<th>"; echo "Category";  echo "</th>";
				echo "<th>"; echo "Availability";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				
			echo "</tr>";	
                                               $res=mysqli_query($conn,"select * from book_store");
			while($row=mysqli_fetch_assoc($res))
                                
			{
                            $img = $row['book_image'];
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['book_name']; echo "</td>";
                                                                               echo "<td>"; echo "<img src='img/$img' class='book img-responsive' style='height: 200px;width: 200px;'/>"; echo "</td>";
				echo "<td>"; echo $row['book_isbn']; echo "</td>";
				echo "<td>"; echo $row['category']; echo "</td>";
				echo "<td>"; echo $row['qty']; echo "</td>";
                                                                                echo "<td>"; echo $row['available']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
                       
		
		
			
		
	
                include 'footer.php'?>
        
</body>
</html>