<?php
include('../modelos/conexion.php');

$id=$_REQUEST['ide'];

$nom= $_POST['nombre'];
$des= $_POST['descripcion'];
$fe= $_POST['fecha'];
$can= $_POST['cantidad'];
$cos= $_POST['costo'];
$cod= $_POST['codigo'];
$cat= $_POST['categoria'];

$query="UPDATE `producto` SET `Nombre`='$nom',`Descripción`='$des',`Fecha_Registro`='$fe',`Cantidad`='$can',
`Costo_Unitario`='$cos',`Codigo_Barra`='$cod',`id_Categoria`='$cat' WHERE Id_Producto";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaProducto.php");
}else{

    echo"no se actualizo";
}

?>