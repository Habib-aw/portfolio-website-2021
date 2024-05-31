<?php 
    session_start();
?>
<div id="scroll" onclick="scrolltop()"></div>
<nav class="bar" id="barone">   
    <ul class="ul">
        <li id="firstlist"><a href="index.php">Home</a></li>
        <li id="sec"><a href="index.php#aboutme">About Me</a></li>
        <li><a href="experience.php">Skills</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="portfolio.php#Education">Education</a></li>
        <li><a href="experience.php">Experience</a></li>
        <li><a href="index.php#contact-details">Contact Details</a></li>
        <?php
        if(!(isset($_SESSION['username'])||isset($_SESSION['user']))){
            echo "<li id='endlist'><a href='login.html'>Login</a></li>";
        }else{
            echo "<li id='endlist'><a href='logout.php'>Log out</a></li>";
        }
        ?>
    </ul>
</nav>
<button class="hamburger" onclick="toggleNav()"></button>