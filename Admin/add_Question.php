<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$Ques=$_POST['Question'];


$conn = mysqli_connect("localhost","root","","tesseract");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());} 

// SQL query to retrieve data
$sql = "INSERT INTO `questions` ( `Ques`) VALUES ( '".$Ques."');";
// echo $sql;

// Executing the query and storing the result
if(mysqli_query($conn, $sql))
{
    echo '<script>alert("Successfully Inserted "); ';
    echo'window.open("Welcome_Admin.html","_self");</script>';
    mysqli_close($conn);
    
}
else
{
    echo '<script>alert("Error: while Inserting ");';
    echo ' window.open("Welcome_Admin.html","_self");</script>';
    mysqli_close($conn);
}





?>
    
</body>
</html>