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




$Username = $_POST['Username'];
$Password = $_POST['Password'];
if (isset($_POST["Submit"]))
{
        echo "Successfully Login<br>";
        echo "Welcome :{$Username}!<br>";
}

if(isset($Username)&& !empty($Username))
{
    echo "Username is set with the name of : {$Username} <br>";

} else
{
    echo "No Username detected <br>";
}

if(isset($Password)&& !empty($Password))
{
    echo "Password is set with the name of : {$Password} <br>";

} else
{
    echo "No Password detected <br>";
}

?>


</body>
</html>