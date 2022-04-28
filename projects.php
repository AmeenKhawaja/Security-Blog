#!/usr/bin/php-cgi

<?php 

if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $handle = fopen("info.csv","r");
    $loggedIn = false;
    $row = 1;
    if (($handle = fopen("info.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      if($data[0] == $username && $data[1] == $password){
          $loggedIn = true;
          echo "IT WORKED";
          header("Location: projects.html");
          setcookie("password", $password, strtotime('+1 days'));
          exit;
          break;
      }
      
  }
  fclose($handle);
}
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
                <h2 style="color: #ea1538; font-size: 2.5vh;">Don't have an account? Register <a href="http://cosc.brocku.ca/~ak19nu/A5/register.php">here</a></h2>
                <form action="login.php" method="post">
                    <label for="" style="color: #ea1538;"></label>
                    <input type="text" name ="username" placeholder="Username">
                    <br>
                    <label for=""style="color: #ea1538;"></label>
                    <input type="password" name ="password"placeholder="Password">
                    <br>
                    <input type="submit" name ="login">
                </form>
            </div>
        <script src="" async defer></script>
    </body>
</html>