  <!--jumbotroon-->
      <div class="jumbotron" >
        <div class="container" >
            <h1 class="display-4">Teman Perjalanan Anda<br><span class="font-weight-bold">Di Rentalin_Aja</span></h1>
            <hr class="my-4">  
            <p class="lead">Piihan Terbaik Dalam Kenyaman</p>
        </div>
      </div>

<!--body-->
      <a name="Stock Mobil"></a>
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1>Stock Mobil</h1>
          </div>
        </div>
     

          <div class="row">
            <?php foreach ($mobil as $mb) : ?>
            <div class="col ms">
              <div class="card">
                  <img class="card-img-top" src="<?php echo base_url('/assets/upload/'.$mb->gambar) ?>">
                    <div class="card-body">
                       <div class="text-center">
                                    <!-- Product name-->
                                    <h4><a href=""><?php echo $mb->merk ?></a></h4>
                                   <h5>No.Plat : <?php echo $mb->merk ?></h5>
                                   <h6>Rp. <?php echo number_format($mb->harga,0,',','.')  ?>/hari</h6>
                                </div>

                     <div class="card-footer text-center">
                               
                               <?php 

                               if ($mb->status == "0") {
                                echo "<span class='btn btn-danger' disable>Telah disewa</span>";
                               }else {
                                echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                               }

                                ?>

                                <a class="btn btn-warning" href="<?php echo base_url('customer/dashboard/detail_mobil/').$mb->id_mobil ?>">Detail</a>
                           </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
         </div>