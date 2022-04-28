#!/usr/bin/php-cgi

<?php 

if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $fp = fopen("info.csv", 'a');
    if (($handle = fopen("info.csv", "r")) !== FALSE) {
        if($username == $username[0]){
            echo "username exists, please pick another one!";
        }
    }
    fputcsv($fp,array($username,$password));
    echo "Account has been created! Your username is {$username} and password is {$password} ";
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Assignment 5</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
            <div class = "hero">
                <nav class = "nav">
                  <h2 class = "logo">Ameen <span> Khawaja</span></h2>
                <ul class = "menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="cv.html">CV</a></li>
                    <li><a href="projects.html">Past Projects</a></li>
                    <li><a href="aboutme.html">About me</a></li>
                </ul>
                
            </div>
            <div class="main">
                <h2 style="color: #ea1538; font-size: 2.5vh;">Already have an account? Click <a href="http://cosc.brocku.ca/~ak19nu/A5/login.php">here</a></h2>
            <form action="register.php" method ="post">
                <input type="text" name = "username" placeholder = "Username"> <br>
                <input type="password" name = "password" placeholder ="Password"> <br>
                <input type="submit">
            </form>
            </div>
        <script src="" async defer></script>
    </body>
</html>