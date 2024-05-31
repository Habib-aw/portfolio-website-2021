<?php
session_start();
    include_once 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['email'];
        $pw = $_POST['password'];
        $sql = "SELECT * FROM login";
        
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row['email']===$user && $row['password']===$pw && $row['ID']=="2"){
                    header('location: addPost.html');
                    $_SESSION['username'] = $user;
                    $_SESSION['user']=$user;
                    break;
                }elseif($row['email']===$user && $row['password']===$pw){
                    header('location: blog.php');
                    $_SESSION['user'] = $user;
                    break;
                }else{
                    header('location: login.html');
                }
            }
            } else {
                echo "0 results";
            }
        
            
        $conn->close();
    }
    //if login success addpost.html else error message
?>