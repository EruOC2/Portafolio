<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style type="text/css">
      body {
        background-color: #333; /* Cambio de color de fondo */
        color: #fff; /* Cambio de color del texto */
      }
      #main {
        background-color: #222; /* Cambio de color de fondo */
        border-radius: 10px; /* Mayor redondez en los bordes */
        padding: 30px; /* Mayor espacio interior */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra ligera */
      }
      .form-control {
        background-color: #444; /* Cambio de color de fondo de los campos de entrada */
        color: #fff; /* Cambio de color del texto de los campos de entrada */
        border: 2px solid #555; /* Cambio del borde de los campos de entrada */
      }
      .btn-primary {
        background-color: #007bff; /* Cambio de color del botón */
        border-color: #007bff; /* Cambio del color del borde del botón */
        color: #fff; /* Cambio de color del texto del botón */
      }
      .btn-primary:hover {
        background-color: #0056b3; /* Cambio de color al pasar el ratón sobre el botón */
        border-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div id="main" class="container mt-5">
      <div class="row min-vh-100 d-flex align-items-center justify-content-center">
        <div class="col-lg-5 col-md-6 col-sm-12 align-self-center">
          <form class="p-4" method="POST" action="app/AuthController.php">
            <h3 class="text-center pb-3">
              Accede al panel administrador
            </h3>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">
                Correo electrónico*
              </label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required name="email">
            </div>
            <div class="mb-3">
              <label for="inputPassword6" class="form-label">
                Contraseña*
              </label>
              <input type="password" id="inputPassword6" class="form-control" placeholder="Escribe aquí" required name="password">
            </div>
            <div class="mb-3">
              <span class="form-text">
                *Campos requeridos
              </span>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-primary">
                Acceder
              </button>
            </div>
            <input type="hidden" name="action" value="login">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>