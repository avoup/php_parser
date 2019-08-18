<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<style>
	table {
  border-collapse: collapse;
}
	table, th, td {
  border: 1px solid black;
}
</style>
</head>
<table>
<thead>
	<tr>
		<td>date</td>
		<td>from</td>
		<td>to</td>
		<td>aircraft</td>
		<td>flight time</td>
		<td>std</td>
		<td>atd</td>
		<td>sta</td>
		<td>status</td>
	</tr>
</thead>
<tbody>
	<?php foreach($dt->find('.data-row') as $dt_row): ?>

				<?php echo '<tr><td>'
										. $dt_row->find('td', 2)->plaintext
										. '</td>'
										. '<td title="'
										. $dt_row->find('td', 3)->title . '">' . $dt_row->find('td', 3)->children(0)->plaintext
										. '</td>'
										. '<td title="'
										. $dt_row->find('td', 4)->title . '">' . $dt_row->find('td', 4)->children(0)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 5)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 6)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 7)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 8)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 9)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 11)->plaintext
										. '</td>'
										. '</tr>'; ?>

	<?php endforeach; ?>
</tbody>
</table>
</body>
</html>
