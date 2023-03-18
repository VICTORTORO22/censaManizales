<form method="post" action="#"> 
    <input type="text" name="tipoH" placeholder="tipoH">
    <input type="submit" value="enviar">
</form>
<?php 
require("models/conexion.php");
@$tipoH = $_POST['tipoH'];
        
if($tipoH){
    $query=mysqli_query($con,"INSERT INTO tipoH(nombre) VALUES ('$tipoH')") OR DIE ("Error al realizar consulta" .mysqli_error($con));
    
}else{
    echo $tipoH;
}





?>