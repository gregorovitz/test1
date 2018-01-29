<?php
$requete = "SELECT * FROM produits";
$resultats = $connexion->query($requete);
echo "<table>";
for each($element as $resultats){
   echo "<tr>"; echo "<td>".$element['description']."</td>";
   echo "<td>".$element['marque']."</td>";
   echo "<td>".$element['pu']." euros </td>"; echo "</tr>";
}
?>