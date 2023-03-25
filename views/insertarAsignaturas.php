<form method="post" action="#"> 
    <input type="text" name="asiganaturas" placeholder="asiganaturas">
    <input type="submit" value="enviar">
</form>
<?php 
require("models/conexion.php");
@$materias = $_POST['asiganaturas'];
        
if($materias){
    $query=mysqli_query($con,"INSERT INTO asignaturas(nombre) VALUES ('$materias')") OR DIE ("Error al realizar consulta" .mysqli_error($con));
    
}else{
    echo $materias;
}

?>
