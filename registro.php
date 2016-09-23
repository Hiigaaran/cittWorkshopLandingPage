<!DOCTYPE html><html><head><title>CITT Viña del Mar - Track Desarrollo Videojuegos</title>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
        <link href="css/registro.css" rel="stylesheet" type="text/css">
    </head><body>
        <div class="cover">
            <div class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><span>CITT Viña del Mar</span><br></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Registro</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cover-image" style="background-image : url('img/ue4_ut_prealpha_dm-outpost23_102.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center form-ciit">
                        <h1 class="text-inverse">Formulario de Registro</h1>
                        <p class="text-inverse">Ingrese su información personal</p>
                        <form action="./controller/TRegistro.php" method=POST class="form-horizontal" role="form">
                            <div class="form-group" id="txtNames">
                                <div class="col-sm-2">
                                    <label for="inputEmail3" class="control-label form-citt-label">Nombre Completo</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputNames" placeholder="Ej: Juanito Perez" required>
                                </div>
                            </div>
                            <div class="form-group" id="txtRut">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label form-citt-label">RUT</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputRUT" placeholder="Ej: 16.819.265.7" required>
                                </div>
                            </div>
                            <div class="form-group" id="txtCorreo">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label form-citt-label">Correo</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="inputCorreo" placeholder="Ej: algo@something.cl" required>
                                </div>
                            </div>
                            <div class="form-group" id="txtCarrera">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label form-citt-label">Carrera</label>
                                </div>
                                <div class="col-sm-10">
                                    <!--<input type="text" class="form-control" id="inputCarrera" placeholder="Carrera">-->
                                    <select class="selectpicker" name="CarreraSeleccionada" data-width="100%" min="1" required>
                                      <option value="">Seleccione Carrera</option>
                                      <?php
                                        require_once("./data/Conexion.php");
                                        $conex = new Conexion();
                                        $conex->makeConnection();
                                        $sql = "SELECT * from Carrera";
                                        $lista = mysql_query($sql);
                                        while($row=mysql_fetch_array($lista)){
                                          echo "<option value='".$row['idCarrera']."'>".$row['nombreCarrera']."</option>";
                                        }
                                      ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="txtContacto">
                                <div class="col-sm-2">
                                    <label for="inputPassword3" class="control-label form-citt-label">Contacto
                                        <br>
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputContacto" placeholder="Ej: 569 9 136 1928" required>
                                </div>
                            </div>
                        <br>
                        <br>
                        <input type=submit class="btn btn-lg btn-primary" name="btnRegistro" value="Registrarse">
                        </form>
                    </div>
                </div>
            </div>
        </div>


</body></html>
