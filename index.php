<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href= "style.css">
</head>
<body>

    <form method="post" autocomplete="off">
          <img src="images/logo.svg" alt="">
          
          <div class="input-group">
            
          <br><div class="input-conteiner">
                <a href="#">Nombres y Apellidos</a>
                <input type="text" name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>             
            </div><br>

            <div class="input-conteiner">
                <a href="#">Fecha de Nacimiento</a>
                <input type="date" name="fechanac" placeholder="Fecha_Nacimiento">
                           
            </div><br>

            <div class="input-conteiner">
                <a href="#">Ocupacion</a>
                <input type="text" name="ocupacion" placeholder="Ocupacion">
                             
            </div><br>

            <div class="input-conteiner">
                <a href="#">Contraseña</a>
                <input type="password" name="password" placeholder="Contraseña">
                <i class="fa-solid fa-lock"></i>             
            </div><br>

            <div class="input-conteiner">
                <a href="#">Correo</a>
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>             
            </div><br>

            <div class="input-conteiner">
                <a href="#">Telefono</a>
                <input type="phone" name="phone" placeholder="Telefono">
                <i class="fa-solid fa-phone"></i>             
            </div><br>

            <div class="input-conteiner">
                <a href="#">Nacionalidad</a>
                <select type="text" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad">
                    <option value="">Selecciona una nacionalidad</option>
                    <option value="Peru">Peru</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Colombia">Colombia</option>
                    <option value="EE.UU.">Estados Unidos</option>
                    <option value="China">China</option>
                    <option value="Japon">Japon</option>
                    <option value="Rusia">Rusia</option>
                    <option value="Alemania">Alemania</option>
                    <option value="otra">Otra</option>
                    </select>
                            
            </div><br>

            <div class="input-conteiner">
                <a href="#">Ingles</a>
                <select type="text" id="basico" name="nivel" placeholder="Nivel_ingles">
                    <option value="">Selecciona nivel</option>
                    <option value="basico">Basico</option>
                    <option value="intermedio">Intermedio</option>
                    <option value="avanzado">Avanzado</option>
                    </select>
                           
            </div><br>

            <div class="input-conteiner">
                <a href="#">Lenguaje de Programacion</a>
                <select type="text" id="lenguaje" name="lenguaje" placeholder="Lenguaje">
                    <option value="">Selecciona lenguaje</option>
                    <option value="python">Python</option>
                    <option value="Java">Java</option>
                    <option value="php">PHP</option>
                    <option value="c#">C#</option>
                    </select>
                            
            </div><br>

            <div class="input-conteiner">
                <a href="#">Aptitudes</a>
                <input type="text" name="aptitudes" placeholder="Aptitudes">
                           
            </div><br>

            <div class="input-conteiner">
                <a href="#">Habilidades</a>
                <select type="text" id="habilidades" name="habilidades" placeholder="Habilidades">
                    <option value="">Selecciona Habilidad</option>
                    <option value="liderasgo">Liderasgo</option>
                    <option value="organizar">Organizacion</option>
                    <option value="trabajo_equipo">Trabajo en Equipo</option>
                </select>
                            
            </div><br>

            <div class="input-conteiner">
                <a href="#">Perfil</a>
                <textarea type="text" id="perfil" name="perfil" rows="4" cols="50" placeholder="Aptitudes"></textarea>
                          
            </div><br>

            <a href="#">Terminos y condiciones</a><br>
            <input name="send" type="submit" class="btn" value="Enviar">

          </div>
    </form>

    <?php
       
       include("send.php")

    ?>

</body>
</html>