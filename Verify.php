<html>
<body>

<?php 
$Regno= $_POST["Registration_number"];
$password=$_POST["Password"];
$Ques=$_POST["Question_number"];



$conn = mysqli_connect("localhost","root","","tesseract");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());} 

// SQL query to retrieve data
$sql = "SELECT * FROM users";
$statusregid=FALSE;
$statuspass=FALSE;

// Executing the query and storing the result
$result = mysqli_query($conn, $sql);

// Checking if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Outputting the data
    while ($row = mysqli_fetch_assoc($result)) {
        if($row["Registration_number"]==$Regno)
        {
            $statusregid=TRUE;
            if($row["Password"]==$password)
            {   $sql = "SELECT * from `questions` ;";
                $statuspass=TRUE;
            }
        }
    }
} 

// Close the connection

if($statusregid==TRUE and $statuspass==True)
{   $result = mysqli_query($conn, $sql);
    $Q="";
    while ($row = mysqli_fetch_assoc($result)) {
        
        $Q=$Q."Ques : ".$row["Ques"]."----";
    }
    // echo'<script>console.log(`'.$Q.'`);</script>';
    $Q=substr($Q,0,strlen($Q)-4);
    $args = array(
        'RegisID' => $Regno,
        'Question' => $Q);
    
    header('Location: PleaseWait.html?'.http_build_query($args));
}
elseif($statusregid==FALSE)
{
    echo "User Registration ID not found, can't Proceed.";
}
elseif($statuspass==False)
{
    echo "User Password Entered is not correct, can't Proceed.";
}
else
{
   echo "User Entry Found, But can't Proceed.";
}
mysqli_close($conn);
?>  

</body>
</html>