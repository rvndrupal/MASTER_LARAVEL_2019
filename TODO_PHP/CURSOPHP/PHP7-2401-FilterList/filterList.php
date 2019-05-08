<?php  
print "<table>";
print "<tr>";
print "<th>Nombre</th>";
print "<th>ID</th>";
print "</tr>";
foreach (filter_list() as $id => $filtro) {
	print "<tr>";
	print "<td>".$filtro."</td>";
	print "<td>".filter_id($filtro)."</td>";
	print "</tr>";
}
print "</table>";
?>