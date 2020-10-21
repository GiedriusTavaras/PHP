<?php
$title = 'Main page';
$vardas = 'Labas Gee';
require DIR.'/views/top.php';


echo '<table border="1">';
echo '<tr><th>ID</th><th>Vardas</th><th>Pavarde</th><th>IABN</th><th>Asmens kodas</th><th>Likutis</th></tr>';
foreach( $array as $movie )
{
  echo '<tr>';
  foreach( $movie as $key )
  {
      echo '<td readonly >'.$key.'</td>';
  }
  echo '</tr>';
}
echo '</table>';


require DIR.'/views/bottom.php';
?>

