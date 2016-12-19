<?php

echo"<link rel=\"stylesheet\" href=\"css\boucles.css\">";
echo "Exercice 1<br><br>";

$i = 1;
while ($i <= 10) {
    echo "ceci est ligne n° $i<br>" ; 
    $i++;
}

echo"<br><br><br>";
echo "Exercice 2";
echo "<ul>";
$j = 1;
while ($j <= 10) {
echo "<li>ceci est ligne n° $j</li>";
    $j++;
}
echo "</ul>";

echo"<br><br><br>";
echo "Exercice 3";
echo"<br><br>";
echo "<table>";
echo "<tr><td>#</td><td class=\"titretableau\">Libellé</td></tr>";
$k = 1;
while ($k <= 10) {
echo "<tr><td>$k</td><td>Ceci est la ligne n°$k</td></tr>";
    $k++;
}
echo "</table>";


echo"<br><br><br>";
echo "Exercice 4";
echo"<br><br>";
echo "<table>";
echo "<tr><td>#</td><td class=\"titretableau\">Libellé</td></tr>";
$l = 1;
while ($l <= 10) {
	if ($l % 2 == 0)
	{
		echo "<tr><td>$l</td><td class=\"rouge\">Ceci est la ligne n°$l</td></tr>";
	}
	else
	{
		echo "<tr><td>$l</td><td class=\"bleu\">Ceci est la ligne n°$l</td></tr>";
	}

    $l++;
}
echo "</table>";


echo"<br><br><br>";
echo "Exercice 5";
echo"<br><br>";
echo "<table>";
echo "<tr><td>#</td><td class=\"titretableau\">Prénom</td></tr>";
$tbprenoms = array("José", "François", "Roberto");
$max = sizeof($tbprenoms);
$compteur=1;
while ($compteur<=$max){
	$position_table=$compteur-1;
	echo "<tr><td>$compteur</td><td>$tbprenoms[$position_table]</td></tr>";
    $compteur++;
}
echo "</table>";
 

?>