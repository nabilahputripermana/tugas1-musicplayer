<h2>DATA ARTIS
	<a href="dashboard.php?page=artist_input" class="btn">Tambah</a>
</h2>

<?php 

$art = new App\Artist();
$rows = $art->tampil();

?>

<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Edit</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>