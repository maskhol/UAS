<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <link href="<?php echo base_url('assets/assets_shop/') ?>css/style1.css" rel="stylesheet" />

    <title>tugas uas pemrograman web</title>
  </head>
  <body>
    
    <!--navbar-->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand text-white font-weight-bold" href="#">Rentalin_Aja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
                 <a class="nav-link active nav-link text-white" aria-current="page" href="#!">Home</a>
                 <a class="nav-link text-white" href="#Stock Mobil">Stock Mobil</a>
                 <a class="nav-link text-white" href="#Contact">Contact</a>
                 <a class="nav-link nav-link text-white" href="<?php echo base_url('register') ?>">Register</a>
                       <?php if($this->session->userdata('nama')) { ?>  
                         <a href="<?php echo base_url('auth/logout') ?>" class="nav-link nav-link text-primary">Hello <?php echo $this->session->userdata('nama') ?><span>-->LogOut</span></a>
                            <?php  } else {?><a href="<?php echo base_url('auth/login') ?>" class="nav-link text-danger"><span>Login</span></a>
                                <?php  }?>
          </div>
      </div>
      </nav>
      <?php echo $this->session->flashdata('pesan') ?>