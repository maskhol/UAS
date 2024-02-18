<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Detail mobil</h1>
       </div>
    </section>

    <?php foreach($detail as $dt) : ?>
      <div class="card">
        <div class="card-body">
          
          <div class="row">
            <div class="col-md-4">
              <img width="350px" src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">
            </div> 
            <div class="col-md-7">
              <table class="table">
                <tr>
                  <td>Type Mobil</td>
                  <td>
                  <?php 
                    if ($dt->kode_type == "SDN"){
                      echo "Sedan";
                    }elseif ($dt->kode_type == "MPV") {
                      echo "Multi Purpose Vehicle";
                    }elseif ($dt->kode_type == "SPR") {
                      echo "Sport";
                    }elseif ($dt->kode_type == "SUV") {
                      echo "Sport Utility Vehicle";
                    }else{
                      echo "<span class='text-danger'>Type Mobil Belom Terdaftar</span>";
                    }
                   ?>
                 </td>
                </tr>

                <tr>
                  <td>Merk</td>
                  <td><?php echo $dt->merk ?></td>
                </tr>

                <tr>
                  <td>No. Plat</td>
                  <td><?php echo $dt->no_plat ?></td>
                </tr>

                <tr>
                  <td>Warna</td>
                  <td><?php echo $dt->warna ?></td>
                </tr>

                <tr>
                  <td>Tahun</td>
                  <td><?php echo $dt->tahun ?></td>
                </tr>
                <tr>
                  <td>Harga</td>
                  <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
                </tr>

                <tr>
                  <td>Denda</td>
                  <td>Rp. <?php echo number_format($dt->denda,0,',','.') ?></td>
                </tr>

                <tr>
                  <td>Status</td>
                  <td>
                    <?php 
                      if($dt->status =="0"){
                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                      }else{
                        echo "<span class='badge badge-primary'>Tersedia</span>";
                      }
                     ?>
                  </td>
                </tr>

                
              </table>

              <a href="<?php echo base_url('admin/data_mobil') ?>" class="btm btn-sm btn-primary ml-5">kembali</a>

              <a href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>" class="btm btn-sm btn-success ml-3">Update</a>
            </div> 
          </div>
        </div>
      </div>
    <?php endforeach; ?>
</div>