
        <?php
          include 'connection.php';
          $id=$_GET["id"];
          $a=date("d-m-Y");
          $result= mysqli_query($conn, "update issuestatus set date_of_return='$a' where id=$id");
          
          $booksname="";
          $result= mysqli_query($conn, "select * from issuestatus where id='$id' ");
          while ($row= mysqli_fetch_array($result)){
               $booksname=$row["book_name"];
          }
          mysqli_query($conn, "update  book_store set available=available+1 where book_name='$booksname' ");
        ?>
  
<script type="text/javascript">
  window.location="return_book.php";
</script>