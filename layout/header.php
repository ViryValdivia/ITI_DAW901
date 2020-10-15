<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-wodth, initial-sacale1.0">
        <title>Document</title>

        <?php
        if(isset($imports)){
            foreach($imports["css"] as $cssFile){
                echo "<link rel= 'stylesheet' type='text/css' href='css/site.css'>";
            }
            foreach ($imports ["js"]as $jsFile){
                echo "<script type='text/javascript' src='js/site.js'> </script>";
            }
        
        }
?>
    </head>
    <body>
        <a href="index.php">Inicio</a><br></br>
    

