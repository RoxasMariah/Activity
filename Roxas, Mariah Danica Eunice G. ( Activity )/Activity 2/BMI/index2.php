<?php
 $serverName = "localhost";
 $user ="root";
 $pass = "";
 $databaseName= "act2";
 $conn = new mysqli($serverName, $user, $pass, $databaseName);
 if ($conn->connect_error) {
     die("Connection Failed: ".$conn->connect_error);
 }
 echo "Connection Established!";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $weight = $_POST['weight'];
  $weightUnit = $_POST['weightUnit'];
  $height = $_POST['height'];
  $heightUnit = $_POST['heightUnit'];

  if ($weightUnit === "lbs") {
    // Convert lbs to kg
    $weight = $weight * 0.453592;
  }

  if ($heightUnit === "in") {
    // Convert in to meters
    $height = $height * 0.0254;
  }

  // Calculate BMI
  $bmi = $weight / ($height * $height);

  echo "Your BMI is: " . round($bmi, 2);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  
</head>
<body>
  <div class="container">
    <h2>BMI Calculator</h2>
    <div id="bmiForm">
      <label for="system">Select Measurement System:</label>
      <select id="system">
        <option value="metric">Metric (kg, m)</option>
        <option value="imperial">Imperial (lbs, ft/in)</option>
      </select>
      <div id="metricFields" class="fields">
        <input type="number" id="weightMetric" placeholder="Weight (kg)">
        <input type="number" id="heightMetric" placeholder="Height (m)">
      </div>
      <div id="imperialFields" class="fields" style="display: none;">
        <input type="number" id="weightImperial" placeholder="Weight (lbs)">
        <input type="number" id="feetImperial" placeholder="Feet">
        <input type="number" id="inchesImperial" placeholder="Inches">
      </div>
      <button onclick="calculateBMI()">Calculate BMI</button>
      <div id="result"></div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>