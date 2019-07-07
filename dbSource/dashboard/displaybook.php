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
 
<center><h2>List Of Books</h2></center>
   <br>
	<?php

	

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Publication";  echo "</th>";
				echo "<th>"; echo "Availability";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Price";  echo "</th>";
			echo "</tr>";	
                                               $res=mysqli_query($conn,"select * FROM books");
			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row[' writer']; echo "</td>";
				echo "<td>"; echo $row['publication']; echo "</td>";
				echo "<td>"; echo $row['available']; echo "</td>";
				echo "<td>"; echo $row['qty']; echo "</td>";
				echo "<td>"; echo $row['price']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>"
;	
                include 'footer.php'?>
        
</body>
</html>