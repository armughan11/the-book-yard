
        <?php
       include "connection.php";
       $id=$_GET["sid"];
       mysqli_query($conn, "update student set status='yes' where sid=$id");
        ?>
  
<script type="text/javascript">
  window.location="displayStudentInfo.php";
</script>