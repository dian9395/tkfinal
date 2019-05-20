<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>
	<body>
		<table border="1" style="border-collapse:collapse; width:50%;">
			<tr style="background:grey;">
				<th>No Indux</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
			<?php
				foreach ($data as $dd){?>
			<tr>
				<td><?php echo $dd['nim'];?></td>
				<td><?php echo $dd['nama'];?></td>
				<td><?php echo $dd['Alamat'];?></td>
				<td align="center">
					<a href="<?php echo base_url()."index.php/crud/edit_data/".$dd['nim'];?>">Edit</a> ||
					<a href="<?php echo base_url()."index.php/crud/do_delete/".$dd['nim'];?>">Delete</a>
				</td>				
			</tr>
				<?php }	?>
		</table>
		<a href="<?php echo base_url()."index.php/crud/add_data";?>">Tambah Data</a>
	</body>
</html>
		