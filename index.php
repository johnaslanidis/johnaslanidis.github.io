
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<li> <a href="index.php?pageName=home"> home </a> </li>
<li> <a href="index.php?pageName=about"> About us </a> </li>
<li> <a href="index.php?pageName=contact"> Contact us </a> </li>

</body>
</html>

<?php 
if(!empty($_GET['pageName'])){
$filename = "folder";

$pageFolder = scandir($filename,0);

unset($pageFolder[0],$pageFolder[1]);

$pageName = $_GET["pageName"];

if (in_array($pageName.'.php',$pageFolder))
{
    include ($filename.'/'.$pageName.'.php');
}else{
    echo 'Sorry Page Not Found';

} 
}
