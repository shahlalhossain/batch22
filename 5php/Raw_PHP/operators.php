<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set Training | PHP Operators </title>

    <!-- Bootstrap as External CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!-- Internal CSS -->
    <style>

    </style>
</head>

<body>

<br><br>
<div class="container pt-3">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>PHP Operators</h4>
            <hr>
        </div>

        <div class="col-sm-12 text-center">
            <?php

            // $x = 200;
            // $y = 300;
            // echo "X = " . $x; echo "<br>"; echo "Y = " . $y;

            // echo "<br>";
            // $x = $y; // Assignment Operator
            // echo "X = " . $x;

            // echo "<br>";
            // $x += $y;
            // echo "X += Y = " . $x;

            // echo "<br>";
            // $x *= $y;
            // echo "X *= Y = " . $x;

            // echo "<br>";
            // $x -= $y;
            // echo "X -= Y = " . $x;

            // echo "<br>";
            // $x /= $y;
            // echo "X /= Y = " . $x;



            // $number1 = 500;
            // $number2 = 500;
            
            // if ($number1 === $number2) {
            //     echo "Equal and Identical";
            // } else {
            //     echo "NOT Equal OR Identical";
            // }

            // $m = "500";
            // $n = 500;
            // if ($m === $n) {
            //     echo "TRUE";
            // } else {
            //     echo "FALSE";
            // }

            // $m = 501;
            // $n = 500;
            // if ($m != $n) {
            //     echo "FALSE";
            // } elseif ($m == $n) {
            //     echo "TRUE";
            // } else {
            //     echo "Nothing";
            // }


            // $m = 500;
            // $n = 500.00;
            // if ($m !== $n) {
            //     echo "FALSE";
            // } else {
            //     echo "TRUE";
            // }


            // $a = 5555;
            // $a = "ABC";
            // $a = NULL;

            // if (!$a) {
            //     echo "A is NOT SET Yet";
            // } else {
            //     echo "A is SET";
            // }

            $a = 5555;
            // $a = NULL;
            $b = 6666;

            // $x = isset($a) ? "Good Morning" : "Good Evening";
            // echo $x;
            // echo "<br>";
            // $x = isset($a) ? $a : $b;
            // echo $x;
            // echo "<br>";

            $height = 172.72; // In Centimeter -- 5'8"
            $weight = 60; // In KG
            if ($height && $weight) {
                $bmi = calculateBMI($height, $weight);
                echo "Your BMI Value is: " . round($bmi['value'], 2);
                echo "<br>";
                echo "Your BMI Status is: " . $bmi['status'];
            }
            
            echo "<hr>";

            $systolic = 120;
            $daitolic = 80;
            if ($systolic && $daitolic) {
                $bp_status = calculateBP($systolic,  $daitolic);
                echo "Your Blood Pressure (BP) is: " . $systolic . "/" . $daitolic;
                echo "<br>";
                echo "Your Blood Pressure (BP) Status is: " .$bp_status;
            }

            function calculateBMI($height, $weight) {
                // [weight (kg) / height (cm) / height (cm)] x 10,000
                $heightSquare = $height**2;
                $bmi_value = ($weight/ $heightSquare) * 10000;
                // Underweight =< 18.5
                // Normal weight = 18.5–24.9
                // Overweight = 25–29.9
                // Obesity = BMI of 30 or greater 

                $bmi_status = '';
                if (($bmi_value > 0) && ($bmi_value <= 18.5)) {
                    $bmi_status = "Underweight";
                } elseif (($bmi_value > 18.5) && ($bmi_value < 24.9)) {
                    $bmi_status = "Normal Weight";
                } elseif (($bmi_value > 24.9) && ($bmi_value < 29.9)) {
                    $bmi_status = "Overweight";                    
                } elseif ($bmi_value > 29.9) {
                    $bmi_status = "Obesity";                    
                } else {
                    $bmi_status = "Unkown";
                }

                $bmi['value']   = $bmi_value;
                $bmi['status']  = $bmi_status;

                return $bmi;
            }

            function calculateBP($systolic,  $daitolic) {
                // Very Low Level: MAP less than 60 mmHg comes under this level.
                // Low Level: MAP between 60 and 70 mmHg falls under this level.
                // Normal Level: The normal range of MAP is between 70 and 100 mmHg.
                // High Level: MAP between 100 & 130 mmHg comes under this level.
                // Very High Level: MAP above 130 mmHg comes under this level.

                if($systolic && $daitolic) {
                    $map = calculateMAP($systolic, $daitolic);

                    if ($map < 60) {
                        $bpStatus = "Very Low";
                    } elseif ($map >= 60 && $map < 70) {
                        $bpStatus = "Low";
                    } elseif ($map >= 70 && $map < 100) {
                        $bpStatus = "Normal";
                    } elseif ($map >= 100 && $map <= 130) {
                        $bpStatus = "High";
                    } elseif ($map > 130) {
                        $bpStatus = "Very High";
                    } else {
                        $bpStatus = "Unkwon";
                    }
                }
                return $bpStatus;
            }

            function calculateMAP($systolic, $daitolic) {
                // Mean Arterial Pressure (MAP) = ((2 * Diastolic BP) + Systolic BP) / 3
                $meanArterialPressure = ((2 * $daitolic) + $systolic) / 3;
                return $meanArterialPressure;
            }
            
            // if ($a == 5) {

            //         if ($b == 25) {
                        
            //         } else {

            //         }

            // } elseif ($a == 10) {

            // } elseif ($a == 15) {

            // } else {

            // }
            
            echo "<hr>";

            $cities = [
                "Bagerhat",
                "Bandarban",
                "Barguna",
                "Barisal",
                "Bhola",
                "Bogura",
                "Brahmanbaria",
                "Chandpur",
                "Chapainawabganj",
                "Chattogram",
                "Chuadanga",
                "Comilla",
                "Dhaka",
                "Dinajpur",
                "Faridpur",
                "Feni",
                "Gaibandha",
                "Gazipur",
                "Gopalganj",
                "Habiganj",
                "Jamalpur",
                "Jessore",
                "Jhalokati",
                "Jhenaidah",
                "Joypurhat",
                "Khagrachhari",
                "Khulna",
                "Kishoreganj",
                "Kurigram",
                "Kushtia",
                "Lakshmipur",
                "Lalmonirhat",
                "Madaripur",
                "Magura",
                "Manikganj",
                "Meherpur",
                "Moulvibazar",
                "Munshiganj",
                "Mymensingh",
                "Naogaon",
                "Narail",
                "Narayanganj",
                "Narsingdi",
                "Natore",
                "Netrokona",
                "Nilphamari",
                "Noakhali",
                "Pabna",
                "Panchagarh",
                "Patuakhali",
                "Pirojpur",
                "Rajbari",
                "Rajshahi",
                "Rangamati",
                "Rangpur",
                "Satkhira",
                "Shariatpur",
                "Sherpur",
                "Sirajganj",
                "Sunamganj",
                "Sylhet",
                "Tangail",
                "Thakurgaon"
            ];
            // shuffle($cities);
            // $homeTown = $cities[5];

            $key = array_rand($cities);
            $homeTown = $cities[$key];

            // $homeTown = "Rajshahi";
            switch ($homeTown) {
                case "Bagerhat":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Bandarban":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Barguna":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Barisal":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Bhola":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Bogura":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Brahmanbaria":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Chandpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Chapainawabganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Chattogram":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Chuadanga":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Comilla":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Dhaka":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Dinajpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Faridpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Feni":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Gaibandha":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Gazipur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Gopalganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Habiganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Jamalpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Jessore":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Jhalokati":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Jhenaidah":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Jhenaidah":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Joypurhat":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Khagrachhari":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Khulna":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Kishoreganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Kurigram":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Kushtia":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Lakshmipur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Lalmonirhat":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Madaripur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Magura":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Manikganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Meherpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Moulvibazar":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Munshiganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Mymensingh":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Naogaon":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Narail":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Narayanganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Narsingdi":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Natore":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Netrokona":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Nilphamari":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Noakhali":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Pabna":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Panchagarh":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Patuakhali":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break; 
                case "Pirojpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Rajbari":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Rajshahi":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Rangamati":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Rangpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Satkhira":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Shariatpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Sherpur":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Sirajganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Sunamganj":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Sylhet":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Tangail":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;
                case "Thakurgaon":
                    echo "Your Home Town is ". ucfirst($homeTown);
                    break;                                                                                                                                                                                                                                                      
                default:
                    echo "Your Home Town is Unkown";
            }

            $A = [1,2,3,"4",5,6,7,8,9];
            $B = [1,2,3,4,5,6,7,8,9];
            $C = $A + $B;

            $C = [1,2,3,4,5,6,7,8,9];
            ?>
        </div>


    </div>
</div>

</body>
</html>
