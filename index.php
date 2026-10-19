<?php
include 'process.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Electricity Bill Calculator</title>
</head>

<body>
    
    <h1 style="text-align: center;">House Electrical Bill</h1>
<!--we call this as inline-style -->
    <div>
        <table border = "1">

            <tr>
                <th>Block Tariff (Per Month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>

            <tr>
                <td>For the first 200 KWh (1-200 Kwh) per month</td>
                <td>sen/kwh</td>
                <td>0.218</td>
            </tr>

            <tr>
                <td>For the next 100 kWh (201 - 300 kWh) per month</td>
                <td>sen/kwh</td>
                <td>0.344</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (301 - 600 kWh) per month</td>
                <td>sen/kwh</td>
                <td>0.516</td>
            </tr>
            
            <tr>
                <td>For the next 300 kWh (601 - 900 kWh) per month</td>
                <td>sen/kwh</td>
                <td>0.546</td>
            </tr>

            <tr>
                <td>For the next 200 kWh (901 Kwh onwards) per month</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>

            <tr>
                <td colspan ="3">The minimum monthly chafe is RM 300</td>
            </tr>

            
        </table>

    </div>


    <?php

    if ($error != "")
        echo "<h4 style=' color: red; '> <b> Warning: . </b> ". $error . "</h4>";

    ?>

    <div>
        <form method ="post">
            <label for="units">For the first 200 KWh (1-200 Kwh) per month</label>
            <input type="number" id ="Units" name ="first" >
            <br>
            <label for="units">For the next 100 kWh (201 - 300 kWh) per month</label>
            <input type="number" id ="Units" name ="second">
            <br>
            <label for="units">For the next 300 kWh (301 - 600 kWh) per month</label>
            <input type="number" id ="Units" name ="third" >
            <br>
            <label for="units">For the next 300 kWh (601 - 900 kWh) per month</label>
            <input type="number" id ="Units" name ="fourth" >
            <br>
            <label for="units">For the next 200 kWh (901 Kwh onwards) per month</label>
            <input type="number" id ="Units" name ="fifth" >
            <br>
            

            <button type ="submit" name ="calculate">Calculate Bill</button>

        </form>

    </div>
</body>


<?php 
if ($showbill) {
echo "<hr>";
echo "<h3>My Electricity Bill</h3>";

echo "First Input :" . $firstinput . "+ 0.218 = RM" . $firstcharge . "<br>";
echo "Second Input :" . $secondinput . "+ 0.344 = RM" . $secondcharge . "<br>";
echo "Third Input :" . $thirdinput . "+ 0.516 = RM" . $thirdcharge . "<br>";
echo "Fourth Input :" . $fourthinput . "+ 0.546 = RM" . $fourthcharge . "<br>";
echo "Fifth Input :" . $fifthinput . "+ 0.571 = RM" . $fifthcharge . "<br>";


echo "Total Consumption:" . $totalInput . "kWh<br>";
echo "Total need to be paid: RM " . $totalcharge ."<br>";
}
?>


</html>