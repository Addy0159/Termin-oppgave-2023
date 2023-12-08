<?php
session_start();
$server = "localhost";
$user = "Addy";
$pw = "Addy123";
$db = "termin";

$conn = mysqli_connect($server, $user, $pw, $db) or die ('noe gikk galt');

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $email = $_POST["email"];

//  Gets the info from the database
    $sql = "SELECT id, username, password, email FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

//  Checks that everything was done right 
   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            header("Location:Index.html ");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

if ($result = mysqli_query($con, $sql)) {
    echo "Returned rows are: " . mysqli_num_rows($result);
    // Free result set
    mysqli_free_result($result);
  }





mysql_close($conn);
?>