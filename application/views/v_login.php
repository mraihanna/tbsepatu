
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/styles.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">

    <title>Login</title>
  </head>

<body>
 
	<h1>Aplikasi CRUD Data Sepatu</h1>
 
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">	
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required" autofocus>
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="Masuk">
 
			<br/>
			<br/>
		</form>
		
	</div>
  <!-- FOOTER -->

  <footer class="bd-footer p-3 p-md-5 mt-5 bg-dark text-center text-light">
                    <p><strong>Muhammad Raihan Nur Azmii</strong></p>
                      <p>Contact Us : </p>
                          <a href="https://www.instagram.com/mraihanna1278.cs/">Instagram</a>
                          <br>
                          <a href="https://api.whatsapp.com/send?phone=6289504824037&text=Maaf%20Saya%20ingin%20bertanya">Whatsapp</a>
                      <br><br>
                      <p><strong>Aldo Dwie Rizky</strong></p>
                      <p>Contact Us : </p>
                          <a href="https://www.instagram.com/aldodwrzy_/">Instagram</a>
                          <br>
                          <a href="https://api.whatsapp.com/send?phone=628996136751&text=Maaf%20Saya%20ingin%20bertanya">Whatsapp</a>
                          <br><br>
            <p class="mb-0">Website ini dibuat dengan sepenuh hati dan penuh keikhlasan juga untuk memenuhi Tugas Besar Web Lanjutan.</p>
            <p class="mb-0">CRUD Data Sepatu v1.0.0. by : <q><strong>Aldo Dwie Rizky & Muhammad Raihan Nur Azmii</strong></q>.</p>
            <p class="mb-0">2021</p>

    </footer>
   

  
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
