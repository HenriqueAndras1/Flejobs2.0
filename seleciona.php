<?php

require_once 'conecta.php';

$query = "SELECT * FROM flexjobs";
$stmt = $pdo->prepare($query);
$stmt->execute();
?>
<table border="1" width="500"> 
  <tr>
    <th>id</th>
    <th>nome</th>
    <th>email</th>
    <th>cpf</th> 
	<th>senha</th> 
	<!-- <th>conf_senha</th>  -->
  </tr>
<?php
while($result = $stmt->fetch()){
  /*
  echo 'id_user: ' . $result['id_user'] . '<br>';
    echo 'login: ' . $result['nome'] . '<br>';
    echo 'senha: ' . $result['email'] . '<br>';
    echo 'data: ' . $result['cpf'] . '<hr>';
	echo 'data: ' . $result['senha'] . '<hr>';
	echo 'data: ' . $result['conf_senha'] . '<hr>';
*/
  echo "<tr>";
  echo "<td>". $result['id'] ."</td>";
  echo "<td>". $result['nome'] ."</td>";
  echo "<td>".  $result['email'] ."</td>";
  echo "<td>". $result['cpf'] ."</td>";
  echo "<td>". $result['senha'] ."</td>";
  //echo "<td>". $result['conf_senha'] ."</td>";
  echo "</tr>";


}
echo "</table>";
$result = null;
$stmt = null;
$pdo = null;
?>