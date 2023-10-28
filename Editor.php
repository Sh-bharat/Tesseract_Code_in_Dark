<!DOCTYPE html>
<html lang="en">
<head>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playpen+Sans:wght@600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./css/Editor.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
    <script>
let RegID=localStorage.getItem("Registration_number");
let Ques=localStorage.getItem("Question");
console.log(Ques);
let Questionslist=Ques.split("----");
let Questiontoshow=Questionslist.splice(0,1);
Questionslist=Questionslist.join("----");
localStorage.setItem("Registration_number", RegID);
localStorage.setItem("Question", Questionslist);




setTimeout(changeopacity,10000);
console.log("Started");
setInterval(function () { console.log("entered now"); document.getElementById("m_code").style.opacity='1'; setTimeout(changeopacity,5000);}, 120000);
function changeopacity()
{   console.log("changed");
    var y=document.getElementById("m_code");
    var x;
    if(y.style.opacity=='1')
    { x='0';}
    else if(y.style.opacity=='0')
    { x='1';}

    console.log("Changing ");
    y.style.opacity=x;  

}
    </script>
</head>
</script>
<body>
<?php

$url="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$url_components = parse_url($url);
 
parse_str($url_components['query'], $params);

    $Regno=$params['RegID'];
    ini_set('short_open_tag', 'on');
    $url='save.php?RegID='.$Regno;
?>
    
<div class="context">
    <p id="Questag" class="heading"></p>
</div>
<div class="context" id="CodingArea" >
    <br>
<div id="textcontainer">
       
        
    
    <form action="<?=$url?>" method="post">
        <input type="hidden" name="Registration_number"  id='Registration_number' value="1">
        <input type="hidden" name="Question"  id='Question' value="1">
        
        <textarea style="opacity:1" name="Code" id="m_code" rows="30" placeholder="Enter your Code here .."></textarea>      
        <input type="submit" id="submitbutton" value="Submit">
      </form>
    
</div>
    
</div>



<div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
        </ul>
</div >

    
</body>
<script>
    
let x=document.getElementById("Registration_number").innerHTML=RegID;
let y=document.getElementById("Questag").innerHTML=Questiontoshow;
</script>

</html>