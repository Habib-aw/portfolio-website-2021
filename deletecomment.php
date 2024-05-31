<?php
include_once 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $delete = $_POST['personalID'];
        
        $sql="DELETE from comments where personalID=$delete";

        if (!($conn->query($sql) === TRUE)) {        
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    header("Location: blog.php#blogentry");
?>