<!DOCTYPE html>
<head>
    <body>

        <?php

            $serverName = "localhost";
            $user = "root";
            $pass = "";
            $databaseName = "act2";

            $conn = new mysqli ($serverName, $user, $pass, $databaseName );

                if ($conn->connect_error) {
                die("Connection Failed: " .$conn->connect_error);

            }

            echo "Connection Established!";

        ?>
    </body>
</html>