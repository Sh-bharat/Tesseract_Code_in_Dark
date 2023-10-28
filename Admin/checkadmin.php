<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Admin Permissions</title>
</head>
<body>
<?php
$Admin= $_POST["Admin_id"];
$password=$_POST["Password"];
if($Admin=="DEDSEC")
{
    if($password=="@@@@####")
    {
        header('Location: Welcome_Admin.html');
    }
    else
    {
        echo'<script>alert("Error: Incorrect Admin Password"); window.open("index.html","_self");</script>';
       
    }

}
else
{
    echo'<script>alert("Error: Incorrect Admin ID");window.open("index.html","_self");</script>';
    
}

?>
</body>
</html>