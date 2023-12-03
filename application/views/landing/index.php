<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Book Store</title>
<?php //Loading head.php
  $this->load->view('admin/templates/head');
?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins')?>/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins')?>/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/plugins')?>/landing/mainn.css">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins')?>/landing/header.css">
    
  </head>
  <body>
    <header style="background-image: url(<?php echo base_url('assets/foto')?>/background.jpg);">
      <section class="header-content">
        <br><br><br><br><br><br><br><br><br>
        <!-- <img class="rocky-dashed animate-pop-in" src="images/rocky-dashed.svg"> -->
        <h1 class="header-title animate-pop-in">Book Store (kelompok 8)</h1><br><br>
        <h3 class="header-subtitle animate-pop-in"> 191351220-Yuliana Rahmawati Kusuma Dewi  | 191351189-Rahman </h3>
       <p class="header-button animate-pop-in"><a href="<?php echo base_url('Login/pengguna') ?>"><button type="submit" class="btn btn-primary"><h2>LOGIN</h2></button></a></p>
      </section>
      
    </header>
    <br>
    <br>
    <br>
    <br>

      <div class="card"> <h1><center>Best Seller</center></h1> <br><br><br>
        
        <div class="card-group">
  <div class="card">
    <img src="<?php echo base_url('assets/foto')?>/best.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo base_url('assets/foto')?>/1_arrival.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="<?php echo base_url('assets/foto')?>/2_arrival.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
  
</div>


  

      
</div>

    

    
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





  </body>
</html>