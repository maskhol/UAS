<div class="container">
	
	<div class="card col-6" style="margin-top: 80px; margin-bottom: 50px;">
		<div class="card-header">
				Form Rental Mobil
			</div>
			
		<div class="card-body">
			<?php foreach($detail as $dt) : ?>
				<form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">
					<div class="form-group ">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama','<span class="text-small text-danger">,</span>') ?>
                    </div>
					<div class="form-group">
						<label>Harga Sewa/hari</label>
						<input type="hidden" name="harga" value="<?php echo $dt->id_mobil ?>">
						<input type="number" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
					</div>

					<div class="form-group">
						<label>Denda/hari</label>
						<input type="number" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
					</div>

					<div class="form-group">
						<label>Tanggal Rental</label>
						<input type="date" name="tgl_rental" class="form-control">
					</div>

					<div class="form-group">
						<label>Tanggal Kembali</label>
						<input type="date" name="tgl_kembali" class="form-control">
					</div>
					<button type="submit" class="btn btn-warning">Rental</button>
				</form>
			<?php endforeach; ?>
		</div>
		
	</div>
</div>