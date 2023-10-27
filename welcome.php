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
<?php
    <div class="bg">

    if(isset($_POST['submit'])){          
        $name = $_POST['name'];
            $_SESSION['name']++;
    echo "Welcome $name";
        echo "<meta http-equiv='refresh' content='0;url=welcome.php'>";

}
</div>
?>
