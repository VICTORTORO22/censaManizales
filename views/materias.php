<?php
require('models/conexion.php');
$query=mysqli_query($con,"SELECT * FROM materia");
$res=mysqli_fetch_array($query);
echo $res['id'];

?>