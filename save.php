<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<script>
    let RegID=localStorage.getItem("Registration_number");  
    // console.log(RegID);  
    let Ques=localStorage.getItem("Question");
    // let myArray = Ques.split(" ");
    // Ques=parseInt(myArray[1]);  
    // let Question_number=parseInt(myArray[1])+1;   
    		
		localStorage.setItem("Registration_number", RegID);
		localStorage.setItem("Question", Ques);
        
// var url_string = window.location;
// var url = new URL(url_string);
// var RegID1 = url.searchParams.get("Code");
// if(RegID1==undefined)
// {
//     console.log("not found");
    
// }

</script>

<?php


$url="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$url_components = parse_url($url);
 
parse_str($url_components['query'], $params);

    $Regno=$params['RegID'];

$text= $_POST["Code"];



$myfile = fopen("./files/".$Regno.".txt", "a") or die("Unable to open file!");
fwrite($myfile, $text);
fclose($myfile);


$input=file_get_contents("./files/".$Regno.".txt");
$input.="\n---------------------------\n";
$output = fopen("./files/".$Regno.".txt", 'w');  
fwrite($output,$input);



?>
<script>window.open("PleaseWait.html?","_self"); </script>


</body>
</html>