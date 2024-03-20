<!DOCTYPE html> 
    <html>
        <body>

<?php

function calculateBMIMetric($height, $weight) {
    if ($height <= 0 || $weight <= 0) {
        return "Invalid height or weight";
    }
    $bmi = $weight / ($height * $height);
    return $bmi;
}


function calculateBMIImperial($height, $weight) {
    if ($height <= 0 || $weight <= 0) {
        return "Invalid height or weight";
    }
    $bmi = ($weight / ($height * $height)) * 703;
    return $bmi;
}


$height_metric = 1.75; 
$weight_metric = 70;   

$height_imperial = 70; 
$weight_imperial = 154; 

$bmi_metric = calculateBMIMetric($height_metric, $weight_metric);
$bmi_imperial = calculateBMIImperial($height_imperial, $weight_imperial);

echo "BMI calculated using metric units: " . $bmi_metric . "\n";
echo "BMI calculated using imperial units: " . $bmi_imperial . "\n";
?>

</body>
</html>