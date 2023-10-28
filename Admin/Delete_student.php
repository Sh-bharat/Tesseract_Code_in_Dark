<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$url="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($url); 
parse_str($url_components['query'], $params);
$Regno=$params['RegID'];


$conn = mysqli_connect("localhost","root","","tesseract");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());} 

// SQL query to retrieve data
$sql = "DELETE FROM `users` WHERE `Registration_number`='".$Regno."';";
// echo $sql;

// Executing the query and storing the result
if(mysqli_query($conn, $sql))
{
    echo '<script>alert("Successfully Deleted "); ';
    echo'window.open("Welcome_Admin.html","_self");</script>';
    mysqli_close($conn);
    
}
else
{
    echo '<script>alert("Error: No Such Entry Found ");';
    echo ' window.open("Welcome_Admin.html","_self");</script>';
    mysqli_close($conn);
}





?>
    
</body>
</html>