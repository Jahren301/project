<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="ren.css">
</head>
<body>
    <div class="bg">
        <div class="registration-container">
            <br>
        <div class="txt>"> <h2>Registration Form</h2></div>
<form action="final.php" method="post">
<div class="txt">    
    <label> Name </label> <br>
    <br>
    <input type= "text" name="name" id="name" required class="label" > <br>
<br>
    <label> Course </label> <br>
    <br>
    <input type= "course" name="ccourse" id="course" required class="label"> <br>
 <br>
    <div> <label> Password </label> <br>
    <br>
    <input type= "password" name="password" id="password" required class="label"> <br>
    </div>
    <br>
    <input type= "submit" value="Submit" class="submit">  <br>
        </div>
    </form>
    <?php


    if(isset($_POST['submit'])){          
            $name = $_POST['name'];
                $_SESSION['name']++;
        
            echo "<meta http-equiv='refresh' content='0;url=final.php'>";

    }


?>

</div>
</div>
</body>
</html>