<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>

<?php
    require_once('secrets/database_credentials.php');
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    else {
        echo "Connected successfully";
    }
    mysqli_close($conn);
?>
