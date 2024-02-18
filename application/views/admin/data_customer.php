<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Data Customer </h1>
       </div>

       <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-4">Tambah Customer</a>

       <?php echo $this->session->flashdata('pesan') ?>
       
       <table class="table table-borderd table-striped table table-hover">
          <tr>
             <th>NO</th>
             <th>Nama</th>
             <th>Username</th>
             <th>Alamat</th>
             <th>Gender</th>
             <th>No. Telepon</th>
             <th>No. KTP</th>
             <th>Password</th>
             <th>Action</th>
          </tr>

          <?php 

          $no =1;
          foreach ($customer as $cs) : ?>
         <?php endforeach; ?>
         <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $cs->nama ?></td>
            <td><?php echo $cs->username ?></td>
            <td><?php echo $cs->alamat ?></td>
            <td><?php echo $cs->gender ?></td>
            <td><?php echo $cs->no_telepon ?></td>
            <td><?php echo $cs->no_ktp ?></td>
            <td><?php echo $cs->password ?></td>
            <td>
               <a href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
               <a href="<?php echo base_url('admin/data_customer/update_customer/').$cs->id_customer ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
            </td>
         </tr>
       </table>