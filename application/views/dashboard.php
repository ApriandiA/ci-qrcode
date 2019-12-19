<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard QR code</title>
</head>
<body>
    <h2>Halo <?= $this->session->userdata('username') ?></h2>
    <a href="<?= base_url('user/tambah') ?>">Tambah data</a>
    <a href="<?= base_url('login/logout') ?>">Keluar</a>

    <h3>Data User</h3>
    <table width="100%" border='1'>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Role</th>
            <th>Kode QR</th>
        </thead>
      <?php 
        $no = 1;
        foreach($users as $data){
            $qrcode = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $data->key;
      ?>
        <tbody style="text-align: center;">
            <td><?= $no; ?></td>
            <td><?= $data->name?></td>
            <td><?= $data->username?></td>
            <td><?= $data->role?></td>
            <td><a href="<?= $qrcode; ?>"><img src="<?= $qrcode; ?>" style="width: 10%;"/></a></td>
        </tbody>
      <?php $no++; } ?>
    </table>
</body>
</html>