<?php
    include "header.php";
    include "connection.php";
 ?>

<!--add your code here-->
<br>
<center><h1 style="background-color: #0c5460; padding: 10px;width: 45%;border: 1px groove #000;color: #fff">Delete A Book</h1></center>
<br>
<form action="delBooks.php" method="post" enctype="multipart/form-data" style="padding: 10px">
			<div class="form-group">
			<label>Enter Book Name:</label>
			<input class="form-control" name="name" type="text"/>
			</div>
			<div class="form-group">
			<input class="btn btn-danger" name="sub" type="submit"/>
			</div>
		</form>
		<?php
			if(isset($_POST['sub'])){
				$bookname = $_POST['name'];
				
				$query="delete from book_store where book_name='$bookname'";
				$result = mysqli_query($conn,$query);
				if($result == true){
					echo "
						<script>
						alert('Book has been deleted');
						</script>
					";
				}
				else{
					echo "
						<script>
						alert('Something went wrong!');
						</script>
					";	
					
				}
				
			}
			
		?>

  <?php 
         include "footer.php";
        ?>