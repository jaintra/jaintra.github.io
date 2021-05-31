<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $name =$_POST["name"];
    $email = $_POST["email"];
    $sub = $_POST["subject"];
    $msg = $_POST["message"];
    echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$name."</td></tr>
    <tr><td>Email</td><td>".$email."</td></tr>
    <tr><td>Subject</td><td>".$sub."</td></tr>
    <tr><td>Message</td><td>".$msg."</td></tr>
    </table></center>";
    ?>
</body>
</html>