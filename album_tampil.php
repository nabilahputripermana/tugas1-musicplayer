<h2>DATA ALBUM
	<a href="dashboard.php?page=album_input" class="btn">Tambah</a>
</h2>

<?php 

$alb = new App\Album();
$rows = $alb->tampil();

?>

<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Artis</th>
		<th>Edit</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['ART']; ?></td>
			<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>