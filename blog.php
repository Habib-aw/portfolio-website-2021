<!DOCTYPE html>
<html>
    <?php include'head.html'; ?>
    <body style="background-color:white">

    <?php include 'nav.php';
        include_once 'connection.php';
    ?>
    
        <figure id="scrolldown">
            <a href="#blogentry"><img src="images/down.png" alt="" height="100px"></a>
            <figcaption>Blog posts</figcaption>
        </figure>
        
        
            <div class="blogpanel panels">
            <section class="hide-1 hide-2">
                <h1 id="blog"> <span>「</span><span>B</span><span>l</span><span>o</span><span>g</span><span>」</span></h1>
                <?php
                    if(isset($_SESSION['username'])){
                        echo "<a href='addPost.html'><button class='btn'>Add post</button></a>";
                    }
                ?>
            </section>
            </div>
            <div id="blogentry">
                <h1 id="blog-posts">Blog Posts</h1><br>
                <?php 
                    
                    $sql = "SELECT * from blogposts;";
                    $sql2 = "SELECT * from comments";
                    $result2 = $conn->query($sql2);
                    $result = $conn->query($sql);
                    $datas = array();
                    $datas2 = array();
                    if($result2->num_rows >0){
                        while($row = $result2->fetch_assoc()) {
                            $datas2[]=$row;
                        }    
                    }
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $datas[] = $row;
                    }
                    } else {
                    echo "0 results";
                    }
                    echo "<article>";
                    for ($i = count($datas)-1; $i >= 0; $i--) {
                        echo "<section class='post'>
                        <aside>".$datas[$i]["date"]."</aside>
                        <h2>".$datas[$i]["title"]."</h2>
                        <hr>
                        <p>".$datas[$i]["description"]."</p>
                        </section>";
                        echo "<div id='comm-head'>Comments</div>";
                        foreach($datas2 as $values){
                            if($datas[$i]['ID']===$values['ID']){
                                if(isset($_SESSION['username'])){
                                    $someid=$values['personalID'];
                                    echo "<div class='comment'>".$values['commenter']." says<br>".$values['comment']."</div><form action='deletecomment.php' method='post'><input class='preload' type='number' value=$someid  name='personalID'><button class='btn' style='margin-left:20%;margin-bottom:1em;background-color: red;' type='submit'>Delete</button></form>";//delete with form    
                                }else{
                                    echo "<div class='comment'>".$values['commenter']." says<br>".$values['comment']."</div>";
                                }
                            }
                        }
                        
                        if(!(isset($_SESSION['user'])||$_SESSION['username'])){
                            echo "<a href='login.html' class='comment' style='border:none;'><button class='btn'>Add comment</button></a>";
                        }else{
                            $identity = $datas[$i]['ID'];
                            $commenter = $_SESSION['user'];
                            echo "<form style='display:flex;' action='addcomment.php' method='POST'><textarea cols='100' rows='1' placeholder='Add comment' name='comment' class='comment'></textarea><input class='preload' type='number' value=$identity  name='id'><input class='preload' type='input' value=$commenter  name='commenter'><button class='btn' type='submit'>Post</button></form>";
                        }
                    }
                    echo "</article>";
                ?>
                <br>    
            </div>
        <script src="script.js"></script>
    </body>
</html>