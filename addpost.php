<?php 
    
    include_once 'connection.php';
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = date('dS F Y, h:i ')."UTC";
        $sql = "INSERT INTO blogposts (title, description, date)
        VALUES ('$title', '$description', '$date')";
        if (!($conn->query($sql) === TRUE)) {        
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    header("Location: blog.php#blogentry");
?>