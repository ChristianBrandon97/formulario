<?php
include("conexion.php");
if(isset($_POST['send'])){

    if (
        strlen($_POST['name']) >= 1 &&

        //strlen($_POST['fecha']) >= 1 &&
        isset($_POST['fechanac']) >= 1 &&
        strlen($_POST['ocupacion']) >= 1 &&

        strlen($_POST['password']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&

        strlen($_POST['nacionalidad']) >= 1 && 
        strlen($_POST['nivel']) >= 1 &&
        strlen($_POST['lenguaje']) >= 1 &&
        strlen($_POST['aptitudes']) >= 1 &&
        strlen($_POST['habilidades']) >= 1 &&
        strlen($_POST['perfil']) >= 1 ) {

                $name = trim($_POST['name']);

                $fechanac = date($_POST['fechanac']);
                $ocupacion = trim($_POST['ocupacion']);

                $password = trim($_POST['password']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);

                $nacionalidad = trim($_POST['nacionalidad']);
                $nivel = trim($_POST['nivel']);
                $lenguaje = trim($_POST['lenguaje']);
                $aptitudes = trim($_POST['aptitudes']);
                $habilidades = trim($_POST['habilidades']);
                $perfil = trim($_POST['perfil']);

                $fecha = date ("d/m/y");
                $consulta = " INSERT INTO datos(nombre, fecha_nacimiento, ocupacion, contraseña, email, telefono, nacionalidad, nivel_ingles, lenguaje, aptitudes, habilidades, perfil, fecha)
                            VALUES ('$name', '$fechanac', '$ocupacion', '$password', '$email', '$phone', '$nacionalidad', '$nivel', '$lenguaje', '$aptitudes', '$habilidades', '$perfil', '$fecha')";
                
                $resultado = mysqli_query($conex, $consulta);
                
                if($consulta){
                        ?>
                            <h3 class = "success">Tu informacion se ha enviado</h3>
                        <?php
                    } else {
                        ?>
                            <h3 class = "error">Ocurrio un error</h3>
                        <?php
                    }

        } else { 
            ?>
            <h3 class = "error" >Llena todos los campos</h3>

            <?php
        }

}

?>