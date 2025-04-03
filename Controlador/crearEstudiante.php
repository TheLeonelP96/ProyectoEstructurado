<?php
    include("../Modelos/Conexion.php");

    $nom= $_POST['Nombre'];
    $ape= $_POST['Apellido'];
    $ci= $_POST['CI'];
    $gen= $_POST['Genero'];
    $cur= $_POST['Curso'];
    
    //echo $nom, $ape, $ci, $gen,$cur;
    
    $query="INSERT INTO estudiante(IdEstudiante, Nombre, Apellido, CI, Genero, Curso) VALUES ('$nom', '$ape', '$ci', '$gen','$cur')";
    $res=$conexion->query($query);
    if($res)
    {
        echo "Se inserto correctamente";
    }
    else
    {
        echo"No guardo";
    }

?>