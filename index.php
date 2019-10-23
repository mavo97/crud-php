<html>
	<head>
		<title>CRUD</title>
	</head>	
	<body>
		<header>

		</header>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="view/create.php">Create</a>
            </li>

        </ul>


        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
			            <th>Edad</th>
                    </tr>
                </thead>
                 
                <tbody>    
                          
                </tbody>

        <?php 
        include ('./model/conexion.php');
        $personas = new Database();
        $listado=$personas->read();
        while ($row=mysqli_fetch_object($listado)){
            $id=$row->id;
            $nombre=$row->nombre;
            $apellido=$row->apellido;
            $telefono=$row->telefono;
            $edad=$row->edad;
            ?>
            <tr>
            <td><?php echo $nombre;?></td>
            <td><?php echo $apellido;?></td>
            <td><?php echo $telefono;?></td>
            <td><?php echo $edad;?></td>
            <td>
            <a href="./view/update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><button type="button" class="btn btn-warning">Update</button></a>
            <a href="./view/delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><button type="button" class="btn btn-danger">Delete</button></a>
            </td>
            </tr>	
            <?php
            }
            ?>
            </table>
		<footer>
		</footer>
	</body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>