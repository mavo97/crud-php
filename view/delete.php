<?php 
if (isset($_GET['id'])){
	include('../model/conexion.php');
	$persona = new Database();
	$id=intval($_GET['id']);
	$res = $persona->delete($id);
	if($res){
		header('location: ../index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
