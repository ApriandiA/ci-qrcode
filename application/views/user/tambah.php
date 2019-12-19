<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data</title>
</head>
<body>
    <h2>Halo <?= $this->session->userdata('name') ?></h2>
    <?php echo form_open('user/insert')?>
    <label for="nama">Nama Lengkap</label> <br>
    <input type="text" name="name" id="nama" autocomplete="off"> <br><br>

    <label for="username">Username</label> <br>
    <input type="text" name="username" id="username" autocomplete="off"> <br><br>

    <label for="password">Password</label> <br>
    <input type="password" name="password" id="password" autocomplete="off"> <br><br>

    <label for="role">Role</label> <br>
    <input list="roledata" name="role" id="role" autocomplete="off"> <br><br>
    <datalist id="roledata">
      <option value="admin">
      <option value="user">
    </datalist>

    <input type="submit" value="Simpan" name="btnSimpan">
  <?php echo form_close()?>
</body>
</html>