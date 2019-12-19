<?php
    if($this->session->userdata('status') == 'login'){
      redirect('user');
    }else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login QR Code</title>
</head>
<body>

  <h1>Login With QR Code</h1>
  <form action="<?php echo base_url('login/cek_login') ?>" method="POST">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username" autocomplete="off">

    <br><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" autocomplete="off">

    <br><br>

    <input type="submit" value="Login" name="btnLogin">
  </form>
  <br>
  <button onclick="openWebcam()">Login QR Code</button>
  
  <br><br>
  
  <canvas style="display: none;"></canvas>
  <form action="<?php echo base_url('login/cek_login') ?>" method="POST" id="lwb" name="lwb">
    <input type="hidden" name="key" id="barcodeCode">
    <input type="submit" value="Login" name="btnLogin" id="btnLogin" style="display: none;">
  </form>

  <script src="<?php echo base_url('assets/') ?>js/qrcodelib.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/webcodecamjs.js"></script>

  <script>    
    function openWebcam() {
      document.querySelector("canvas").style.display = "block";
      var arg = {
        resultFunction: function(result) {
          var barcode = document.querySelector("#barcodeCode").value = result.code;
          document.querySelector("#btnLogin").click();
        }
      };
      new WebCodeCamJS("canvas").init(arg).play();
    }
  </script>
</body>
</html>
  <?php } ?>