<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>
		
		<table class="table-responsive table table-borderd table-striped">
			
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Tgl. Rental</th>
				<th>Tgl. Kembali</th>
				<th>Harga</th>
				<th>Denda</th>
				<th>Status Pengembalian</th>
				<th>Status Rental</th>
			</tr>
			<?php $no=1; foreach ($transaksi as $ts) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $ts->nama ?></td>
					<td><?php echo date('d/m/y', strtotime($ts->tgl_rental)); ?></td>
					<td><?php echo date('d/m/y', strtotime($ts->tgl_kembali)); ?></td>
					<td>Rp. <?php echo number_format($ts->harga,0,',','.') ?></td>
					<td>Rp. <?php echo number_format($ts->denda,0,',','.') ?></td>
					<td><?php echo $ts->status_pengembalian ?></td>
					<td><?php echo $ts->status_rental ?></td>
				</tr>
		<?php endforeach; ?>
		</table>
	</section>
</div>