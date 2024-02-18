<div class="container mt-5 mb-5">
	
	<div class="card">
		<div class="card-body">
			<?php foreach ($detail as $dt) : ?>
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>" style="width: 300px; height: 400px;">
					</div>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<th>Merk Mobil</th>
								<th><?php echo $dt->merk ?></th>
							</tr>
							<tr>
								<th>Nomor Plat</th>
								<th><?php echo $dt->no_plat ?></th>
							</tr>
							<tr>
								<th>Tahun Produksi</th>
								<th><?php echo $dt->tahun ?></th>
							</tr>
							<tr>
								<th>Status</th>
								<td><?php if($dt->status == '1')
									{echo "Tersedia";}
									else{
										echo "Tidak Tersedia";
									}
								 ?></td>
							</tr>
							<tr>
								 <td>
								 	<?php 

		                               if ($dt->status == "0") {
                                echo "<span class='btn btn-danger' disable>Telah disewa</span>";
                               }else {
                                echo anchor('customer/rental/tambah_rental/'.$dt->id_mobil, '<button class="btn btn-success">Rental</button>');
                               }

		                                ?>
								 </td>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
