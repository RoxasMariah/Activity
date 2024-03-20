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

    if (isset($_POST['submit'])) {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $birthday = $_POST['bday'];

        // INSERT DATA TO DATABASE
        $sql = "INSERT INTO `db` (`first_name`, `last_name`, `age`, `address`, `contact`, `birthday`) VALUES ('$first_name', '$last_name', '$age', '$address', '$contact', '$birthday')";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "New record created successfully.";
        } else {
            echo "Error: ". $sql . "<br>". $conn->error;
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Student Profile</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Student Information:</legend>
            First name:<br>
            <input type="text" name="firstname"><br>
            Last name: <br>
            <input type="text" name="lastname"><br>
            Age:<br>
            <input type="number" name="age"><br>
            Address:<br>
            <input type="text" name="address"><br>
            Contact Number:<br>
            <input type="tel" name="contact"><br>
            Birthdate: <br>
            <input type="date" name="bday"><br>
            <input type="submit" name="submit" value="submit"><br>
        </fieldset>
    </form>
</body>

</html>

<style>
    .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  
}

input, select {
  margin-bottom: 10px;
  width: 100%;
  padding: 10px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
</style>