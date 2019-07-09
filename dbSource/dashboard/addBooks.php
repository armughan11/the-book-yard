<?php 
session_start();
include "connection.php";
include 'header.php';
//if(!$_SESSION['user']){
//	echo "
//		<script>
//		window.location.href='adminlogin.php';
//		</script>
//	";
//}
?>


<br>

<center><h1 style="background-color: #0c5460; padding: 10px;width: 45%;border: 1px groove #000;color: #fff">Add A Book</h1></center>
<form action="addBooks.php" method="post" enctype="multipart/form-data" style="padding: 10px">
			<div class="form-group">
			<label>Enter Book Name:</label>
			<input class="form-control" name="name" type="text"/>
			</div>
			<div class="form-group">
			<label>Enter Book ISBN :</label>
			<input class="form-control" name="isbn" type="text"/>
			</div>
			<div class="form-group">
			<label>Enter Book Category :</label>
			<input class="form-control" name="cat" type="text"/>
			</div>
                                                            <div class="form-group">
			<label>Enter Book Qty :</label>
			<input class="form-control" name="qty" type="text"/>
			</div>
			<div class="form-group">
			<label>Enter Book image :</label>
			<input class="form-control" name="image" type="file" value="Enter an image"/>
			</div>

			<input type="submit" name="sub" class="btn btn-danger"/>
		</form>
		<?php
			if(isset($_POST['sub'])){
				$bookname = $_POST['name'];
				$isbn = $_POST['isbn'];
				$cat = $_POST['cat'];
                                                                                $qty=$_POST['qty'];
				$image = $_FILES['image']['name'];
				$temp = $_FILES['image']['tmp_name'];
				move_uploaded_file($temp, "img/$image");
				
				$query="insert into book_store(book_name,book_image,book_isbn,category,qty,available)"
                                        . " values('$bookname','$image','$isbn','$cat','$qty','$qty')";
				$result = mysqli_query($conn,$query);
				if($result == true){
					echo "
						<script>
						alert('Book has been entered');
						</script>
					";
				}
				else{
					echo "
						<script>
						alert('Something went wrong!');
						</script>
					";	
					echo "something went wrong";
				}
				
			}
			
include 'footer.php';
		?>

