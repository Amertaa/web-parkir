<?php

include 'config.php';

$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];

$login_query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'") or die(mysqli_error($conn));
$count = mysqli_num_rows($login_query);

if ($count > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    header("Location: ../main.php");
} else {
    header("Location: ../login.php");
    echo
    "
    <script>
    alert('Username atau Password Salah')
    </script>
    ";
}
