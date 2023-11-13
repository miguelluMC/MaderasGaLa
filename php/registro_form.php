<?php

    include("conection.php");

    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);

        $consulta = "INSERT INTO usuarios(nombre, username, email, telefono, password) 
        VALUES ('$name', '$username', '$email', '$phone', '$password')";

        //Comprobar que no se repitan usernames
        $checkUser = mysqli_query($conex, "SELECT * FROM usuarios WHERE username='$username'");
        if(mysqli_num_rows($checkUser) > 0) {
            echo'
                <script>
                    alert("Este usuario ya ha sido registrado, intenta con otro nuevamente");
                    window.location = "../Registro.php";
                </script>
            ';
            exit();
        }

        //Comprobar que no se repitan emails
        $checkUser = mysqli_query($conex, "SELECT * FROM usuarios WHERE email='$email'");
        if(mysqli_num_rows($checkUser) > 0) {
            echo'
                <script>
                    alert("Este correo ya ha sido registrado, intenta con otro nuevamente");
                    window.location = "../Registro.php";
                </script>
            ';
            exit();
        }

        $result = mysqli_query($conex, $consulta);
        header("location: ../index.php");
    }
?>