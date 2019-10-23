<?php 
class Database{
    private $con;
    private $dbhost="localhost";
    private $dbuser="root";
    private $dbpass="020897";
    private $dbname="registros";
    function __construct(){
        $this->connect_db();
    }
    public function connect_db(){
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if(mysqli_connect_error()){
            die("Error en la conexión." . mysqli_connect_error() . mysqli_connect_errno());
        }
    }
    public function lim($var){
        $return = mysqli_real_escape_string($this->con, $var);
        return $return;
      }


    public function create($nombre,$apellido,$telefono,$edad){
        $sql = "INSERT INTO `personas` (nombre, apellido, telefono, edad) VALUES ('$nombre', '$apellido', '$telefono', '$edad')";
        $res = mysqli_query($this->con, $sql);
        if($res){
        return true;
        }else{
        return false;
    }
    }

    public function read(){
    $sql = "SELECT * FROM personas";
    $res = mysqli_query($this->con, $sql);
    return $res;
    }
    public function single($id){
        $sql = "SELECT * FROM personas where id='$id'";
        $res = mysqli_query($this->con, $sql);
        $return = mysqli_fetch_object($res );
        return $return ;
    }
    public function update($nombre,$apellido,$telefono,$edad, $id){
        $sql = "UPDATE personas SET nombre='$nombre', apellido='$apellido', telefono='$telefono', edad='$edad' WHERE id='$id'";
        $res = mysqli_query($this->con, $sql);
        if($res){
            return true;
        }else{
            echo $sql;
            return false;
        }
        }
    public function delete($id){
    $sql = "DELETE FROM personas WHERE id=$id";
    $res = mysqli_query($this->con, $sql);
    if($res){
    return true;
    }else{
    return false;
    }
    }
}
    
?>
