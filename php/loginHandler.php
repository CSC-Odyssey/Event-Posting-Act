<?php

session_start();

include('dbconnectionHandler.php');
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM accounts WHERE Username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $userdata = mysqli_fetch_assoc($result);

                if ($userdata['Password'] === md5($password)) {
                    $_SESSION['Username'] = $userdata['Username'];
                    echo "Success";
                    //header("Location: ../index.php");
                    die;
                }
            }
        }
        echo "Denied";
        //header("Location: ../login.html");
    } else {
        echo "Blank Credentials";
        //header("Location: ../login.html");
    }
}