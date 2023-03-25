<form method="post" action="#"> 
    <input type="text" name="asiganaturas" placeholder="asiganaturas">
    <input type="number" name="fkdocente" placeholder="fkdocente">
    <input type="number" name="fkhorario" placeholder="fkhorario">
    <input type="submit" value="enviar">
</form>
<?php 
require("models/conexion.php");
@$materias = $_POST['asiganaturas'];
@$fkdocente = $_POST['fkdocente'];
@$fkhorario = $_POST['fkhorario'];

        
if($materias or $fkdocente or $fkhorario){
    $query=mysqli_query($con,"INSERT INTO `asignaturas` (`nombre`, `fkdocente`, `fkhorario`) VALUES ('$materias', $fkdocente, $fkhorarios)") OR DIE ("Error al realizar consulta" .mysqli_error($con));
    
}else{
    echo $materias;
}

?>
