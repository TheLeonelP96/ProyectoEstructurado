<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
        include "menu.php"
    ?>
    <div class="container">
        <h2>Registro de Estudiante</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="../controlador/crearEstudiante.php">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input class="form-control" name="Nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Apellidp</label>
                        <input class="form-control" name="Apellido" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">CI</label>
                        <input class="form-control" name="CI" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Genero</label>
                        <select class="form-selec" name="Genero" id="">
                            <option value="">Masculino</option>
                            <option value="">Femenino</option>
                            <option value="">Helicoptero</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Curso</label>
                        <input class="form-control" name=" Curso" type="text">
                    </div>
                    <div class="formulario-group">
                        <input class="btn btn-primary" type="submit" value="Guardar">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>