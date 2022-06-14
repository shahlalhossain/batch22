<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Basic PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <style type="text/css">
            
            .page-header {
                background-color:grey;
                padding: 50px;
                border-radius: 10px;
            }

        </style>
    </head>

    <body>
        <div class="page-header text-center">
            <h1>PHP -- First PHP Page </h1>
            <p> We are learning PHP. </p>
        </div>
            
        <br>

        <div class="container" style="border: 1px solid green">
        
            <?php

                $name = 'Sabina Khan';
                $greetings = "Hello " . $name;
                echo ($greetings);
                echo "<br>";

                $txt1 = "Traveling";
                echo "I love " . $txt1;
                echo "<br>";
                
                $txt2 = " Reading.";
                echo "I love " . $txt1 . ' and' . $txt2;
                echo "<br>";

                $number1 = 500;
                $number2 = 50.25;

                $sum = $number1 + $number2;
                echo "Sum of Two given Numbers is: " . $sum;
                echo "<br>";

                $sub = $number1 - $number2;
                echo "Subtract of Two given Numbers is: ".$sub;
                echo "<br>";

                $divistion = $number1 / $number2;
                echo "Division of Two given Numbers is: ".$divistion;
                echo "<br>";

                $multiplication = $number1 * $number2;
                echo "Multiplication of Two given Numbers is: ".$multiplication;
                echo "<br>";

                $reminder = $number1 % $number2;
                echo "Reminder of Two given Numbers is: ".$reminder;
                echo "<br>";

                var_dump($name);
            ?>
        </div>

    </body>
</html>