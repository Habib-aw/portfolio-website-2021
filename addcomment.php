<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    include_once 'connection.php';
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $comment = $_POST['comment'];
        $id = $_POST['id'];
        $commenter = $_POST['commenter'];
        $sql = "INSERT INTO comments (ID, comment, commenter)
        VALUES ('$id', '$comment','$commenter')";
        if (!($conn->query($sql) === TRUE)) {        
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    header("Location: blog.php#blogentry");?>
</body>
</html>