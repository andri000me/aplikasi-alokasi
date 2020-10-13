<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  null, null,null, null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					select: {
						style: 'multi'
					}
			    } );
			})
		</script>
<p>
	<a href="" class = "btn btn-primary btn-small">Tambah Data</a>
</p>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr align="center">
			<th>No</th>
			<th>Nama Posko</th>
			<th>Lokasi</th>
			<th>Jumlah Korban</th>
			<th>Kondisi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach ($data->result() as $row) {
		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->nmposko; ?></td>
			<td><?php echo $row->lokasi; ?></td>
			<td><?php echo $row->jmlkorban; ?></td>
			<td><?php echo $row->kondisi; ?></td>
			<td>
				<a href="">Edit</a>
				<a href="" onclick = "return confirm('Anda yakin ingin menghapus data ini?');">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>