<?php
require('models/conexion.php');
$query=mysqli_query($con,"SELECT * FROM horario");
?>
<button>insertar</button>
<table border=1>
    <thead> <th>id </th> <th>modificar</th> <th>eliminar</th> </thead>
        <tbody>
            <?php
            while($res=mysqli_fetch_array($query)){
                echo'<tr>';
                echo'<td>';
                echo$res['id'];
                echo'</td>';
                echo'</tr>';

            }


?>
