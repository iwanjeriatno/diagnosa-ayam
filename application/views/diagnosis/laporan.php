<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <style>
  table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
  }
  </style>
</head>
<body>
<h3 style="text-align: center">Tabel Hasil Identifikasi Penyakit pada Ayam</h3><br><br>
<table>
    <tr>
        <th style="width: 2%">No</th>
        <th>Tanggal Identifkasi</th>
        <th>Hasil Diagnosa</th>
        <th>Solusi Pengobatan</th>
    </tr>
    <?php $no=1; foreach($laporan as $item) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $item->tanggal_identifikasi ?></td>
        <td><?= $item->hasil_identifikasi  ?></td>
        <td><?= $item->pengobatan  ?></td>
    </tr>
  <?php } ?>
  <tr>
    <td colspan="4">
      <b>Nama Pengguna : <?= $username->username  ?></b>
    </td>
  </tr>
</table>
</body>
</html>
