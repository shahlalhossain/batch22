<!DOCTYPE html>
<html>
    <head>
        <title>Basic PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>
    <body class="text-center">
        <?php

        // for ($x = 1; $x <= 100; $x++) {
        //     echo "The number is: $x <br>";
        // }
        
        
        // $colors = array("red", "green", "blue", "yellow", "white", "black");
        $colors = ["red", "green", "blue", "yellow", "white", "black"];
        foreach ($colors as $value) {
            
            echo ucwords($value);
            echo "<br>";
        }

        ?>
    </body>
</html>