<?php

include("conexion.php");
if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['birth']) >= 1 &&
        strlen($_POST['ocupation']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['country']) >= 1 &&
        strlen($_POST['level']) >= 1 &&
        strlen($_POST['lenguages']) >= 1 &&
        strlen($_POST['aptitudes']) >= 1 &&
        strlen($_POST['skills']) >= 1
        ) {
            $name = trim($_POST['name']);
            $birth = trim($_POST['birth']);
            $ocupation = trim($_POST['ocupation']);
            $phone = trim($_POST['phone']);
            $email = trim($_POST['email']);
            $country = trim($_POST['country']);
            $level = trim($_POST['level']);
            $lenguages = trim($_POST['lenguages']);
            $aptitudes = trim($_POST['aptitudes']);
            $skills = trim($_POST['skills']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, birth, ocupation, phone, email, country, level,  lenguages, aptitudes, skills, fecha)
                VALUES('$name', '$birth', '$ocupation', '$phone', '$email', '$country', '$level', '$lenguages', '$aptitudes', '$skills', '$fecha')";
            $resultado = mysqli_query($conex, $consulta); 
            if ($resultado) {
                ?>
                    <h3 class="success">Registro Completado</h3>
                <?php
            } else {
                ?>
                    <h3 class="success">Error</h3>
                <?php
            }
        } else {
            ?>
                <h3 class="error">No dejes campos vacios</h3>
            <?php
        }
}
?>