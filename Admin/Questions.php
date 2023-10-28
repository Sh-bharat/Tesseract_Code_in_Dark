
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./../css/Login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home Page</title>
	<style>
        body
        {
            background: linear-gradient(111.1deg, rgb(0, 40, 70) -4.8%, rgb(255, 115, 115) 82.7%, rgb(255, 175, 123) 97.2%);

        }
        
        #container
        {
            background-color: #000;
            border: 4px solid white;
            opacity: 0.85;
            width: 80vw;
            min-width: 400px;
            min-height:400px ;
            height: 90vh;
            text-align: center;
            color: white;
        }
  form {
	background-color: black;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 px;
	height: 100%;
	text-align: center;
}

input {
	background-color: rgb(236, 231, 231);
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
    width: 50%;
    min-width: 250px;
}
        table {
        border-collapse: collapse;
      }     
      tr.border-bottom {
        border-bottom: 1px solid white;
      }
        #container:hover
        {
            opacity: 1;
        }
        .inputbox
{
	border-radius: 5px;
}
textarea
{
    min-width: 670px;
    border: 2px solid black;
    border-radius: 10px;
}
#base
{
    position: absolute;
    z-index: 5;
    width: 100%;
    height: 70%;

    

}
#back
{
    position: absolute;
    width: 100%;
    z-index: 4;
    

}
        </style>
        <script>
            function newquestion()
            {
                let x=document.getElementById("back").style.zIndex=6;
            }
        </script>
</head>
<body>
  <?php

$conn = mysqli_connect("localhost","root","","tesseract");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());} 

// SQL query to retrieve data
$sql = "SELECT * FROM questions";

// Executing the query and storing the result
$result = mysqli_query($conn, $sql);


?>

	<div class="container" id="container" >
        <div style=" width: auto; display: inline-block;
        margin: 5%; ">
        <br>
        <table>
            <tr class="border-bottom">
              <th>SNo</th>
              <th>Question</th>
            </tr>


            <?php 
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
      echo'<tr class="border-bottom"> <td>'.$row["Sno"].'</td><td>'.$row["Ques"].'</td></tr>';   
       
    }
} ?>
        
        </table>
        </div>


        <div id="base" style="background-color:black;">
            <form action="delete_ques.php" method="post">
                <input type="number" class="inputbox" name="Question_number" id ="Question_number" placeholder="Delete Ques Number ">
                <input type="submit" class="Login" value="Delete Ques">
                <input type="button" class="Login" onclick="newquestion()" value="New Question">
            </form>
        </div>

        <div id="back" style="  margin:25px; background-color:black;">
            <form action="add_Question.php" method="post">

                <textarea  name="Question" class="inputbox" id="Question" rows="15" placeholder="Enter Question."></textarea>      
                <input type="submit" class="Login" value="Submit">

            </form>
        </div>
	</div>
    
    
</body>

</html>