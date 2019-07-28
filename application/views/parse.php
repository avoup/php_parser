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

	<?php foreach($dt->find('.data-row') as $dt_row): ?>

				<?php echo '<tr><td>'
										. $dt_row->find('td', 2)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 3)->plaintext
										. '</td>'
										. '<td>'
										. $dt_row->find('td', 4)->plaintext
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

</table>
</body>
</html>
