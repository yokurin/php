<?php
	require('dbconnect.php');

	$recordSet = mysql_query('SELECT*FROM my_items ORDER BY id ASC');

?>

<table width="100%">
	<tr>
		<th scope="col">ID</th>
		<th scope="col">メーカー</th>
		<th scope="col">商品名</th>
		<th scope="col">価格</th>
	</tr>
<?php
	while($table = mysql_fetch_assoc($recordSet)){
?>
	<tr>
		<td><?php print(htmlspecialchars($table['id'])); ?></td>
		<td><?php print(htmlspecialchars($table['maker_id'])); ?></td>
		<td><?php print(htmlspecialchars($table['item_name'])); ?></td>
		<td><?php print(htmlspecialchars($table['price'])); ?></td>
	</tr>
<?php
}
?>
</table>
		