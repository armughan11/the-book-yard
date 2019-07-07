<?php
    $servername= 'localhost';//machine where mysql is hosted
                        $username= 'root';
                        $password= '';
                        $dbname= 'library';

                        $conn= new mysqli($servername, $username, $password, $dbname);
                          
                           // Check connection
                     if (!$conn)
                       {
                       die('Connection failed' .$conn->connect_errno);
                       }
?>