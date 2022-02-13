<?php
    
    require 'db.php';

   // session_start();
   if(isset($_POST['msg']))
   {   
        $client = new Predis\Client();
    
        $msg = $_POST["msg"];
        //$user = $_SESSION['username'];
        $user = "ashu";
        $user = "aayush";
        $user = "alpha";
        $user = "beta";
        $user = "gamma";
        $client -> incr("count");
        $count = $client -> get("count");
        $client -> rpush("userHistory",$user);
        $client -> rpush("msgHistory",$msg);
    }  

     echo ' <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>DFR | Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id = "title">
            Chat Application
        </div>

        <div id="nav">
            <a href="msg.php" class="move" id="current"> Home </a> 
            <a href="timeline.php" class="move"> Timeline </a>
            <a href="logout.php" class="move"> Logout </a>
        </div>';

        //$user = $_SESSION['username'];
        $user = "ashu";
        $user = "aayush";
        $user = "alpha";
        $user = "beta";
        $user = "gamma";

        echo '<div id="welcome">    Welcome '.$user.  '</div>';

        echo '<div class="register">

            <form action="msg.php" method="post" >
                Speak to the world : <br>
                <input type="text" name="msg" placeholder="Enter Your Message" class="input" id="msg" > <br> <br>
            
                <button class="btn">Submit</button> 

            </form>
        
        </div>

        <div id="footer">
            <footer>
                <p id="footer-text"> Copyright &#169; to Chat Application - IIITDMJ </p>
            </footer>
        </div>

    </body>
    </html>';
?>

