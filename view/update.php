<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
<html>

<body>
    <div class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="../index.php">Regresar</a>
        </li>

    </ul>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <h1>Actualizar Persona</h1>

                </div>
            </div>
            <?php
				
				include ("../model/conexion.php");
				$personas= new Database();
				
				if(isset($_POST) && !empty($_POST)){
					$nombre = $personas->lim($_POST['nombre']);
					$apellido = $personas->lim($_POST['apellido']);
					$telefono = $personas->lim($_POST['telefono']);
					$edad = $personas->lim($_POST['edad']);
					$id_persona=intval($_POST['id_persona']);
					echo $id_persona;
					$res = $personas->update($nombre, $apellido, $telefono, $edad ,$id_persona);
					
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				  
				</div>	
					<?php
				}
				
				$datos_persona=$personas->single($id);
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-16">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' value="<?php echo $datos_persona->nombre;?>" required >
                    <input type="hidden" name="id_persona" id="id_persona" class='form-control' maxlength="100"   value="<?php echo $datos_persona->id;?>">   
                </div>
				<div class="col-md-16">
					<label>Apellido:</label>
					<input type="text" name="apellido" id="apellido" class='form-control' value="<?php echo $datos_persona->apellido;?>" required>
				</div>
				<div class="col-md-16">
					<label>Telefono:</label>
					<input  name="telefono" id="telefono" class='form-control' value="<?php echo $datos_persona->telefono;?>" required>
				</div>
				<div class="col-md-12">
					<label>Edad:</label>
					<input type="text" name="edad" id="edad" class='form-control' value="<?php echo $datos_persona->edad;?>" required >
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>