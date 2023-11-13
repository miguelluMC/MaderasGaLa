<?php
    session_start();
    include("conection.php");

    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $checkLogin = mysqli_query($conex, "SELECT * FROM usuarios WHERE username='$username' and password='$password'");

    if (mysqli_num_rows($checkLogin) > 0) {
        $_SESSION['username'] = $username;
        header("location: ../html/index.php");
        exit();
    } else {
        echo '
            <script>
                alert("El usuario introducido no existe, favor de revisar nuevamente los datos ingresados");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }

?>