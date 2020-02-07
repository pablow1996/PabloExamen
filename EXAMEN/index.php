<?php require_once('dbconect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fjalla+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/main.css" type="text/css">
        <link href="dbconect.php">
        <title> - Spanish Quotes - </title>
    </head>
    <body>
       <center>
            <h1 class="title">Spanish Quotes Generetor</h1>
            <input name='sentence' class="minimalist_input" onkeyup="showHint(this.value)">
       
            <div id="suggestions" class="suggestions_panel" >
                    <p> [NO RESULTS] </p>
            </div>
       </center>
    </body>
</html>

<script>
    function showHint(str) {
        var xhttp;
        if (str.length == 0) { 
        document.getElementById("suggestions").innerHTML = "";
        return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("suggestions").innerHTML = this.responseText;
        }
        };
        xhttp.open("GET", "main.php?refranero="+str, true);
        xhttp.send();   
    }
  </script>
