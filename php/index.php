<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIIS Caja Nacional de Salud</title>

    <link rel = "preconnect" href = "https://fonts.gstatic.com">
<link href = "https://fonts.googleapis.com/css2? family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,100; 1,300; 1,400; 1,500; 1,700; 1,900 & display = swap "rel =" stylesheet ">

    <link rel="stylesheet" href="../css/estilos.css" />
    <script type="text/javascript" src="../js/script.js"></script>
  </head>
  <body>
    <main>
      <div class="contenedor">
        <div class="caja_trasera">
          <div class="caja_trasera_login">
            <h3>Ya tienes una cuenta?</h3>
            <p>Inicia Secion para entrar a la Pagina</p>
            <button id="btn_Iniciar_Secion">Iniciar Secion</button>
          </div>
          <div class="caja_trasera_register">
            <h3>No tienes una cuenta Aun?</h3>
            <p>Registrate para iniciar Secion</p>
            <button id="btn_Registrarse">Registrarse</button>
          </div>
        </div>
        <div class="contenedor_login">
          <form action="principal.php" class="form_login">
            <h2>CAJA NACIONAL DE SALUD</h2>
            <input type="text" placeholder="Usuario"  class="validate" required pattern="[a-z]{6}"/>
            <input type="password" placeholder="Contraseña" class="validate" required />
            <input type="codigo" placeholder="Codigo de Seguridad" class="validate" required/>
            <button type="submit" onclick="login()">Ingresar</button>
          </form>
          <form action=""  class="form_register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="nombre completo" />
            <input type="text" placeholder="correo" />
            <input type="text" placeholder="Usuario" />
            <input type="password" placeholder="Contraseña" />

            <button>Registrarse</button>
          </form>
        </div>
      </div>
    </main>
    <script src="../js/script.js"></script>
  </body>
</html>
