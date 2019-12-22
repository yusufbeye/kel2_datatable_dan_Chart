<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Cetak berdasarkan id</title>
</head>
<style type="text/css">
 td {
  padding: 5px;
 }
</style>
<body  style="font-family:Times New Roman;font-size:12px">
<?php $no=1; foreach($record->result() as $row){ ?>
<center><h1>Cetak berdasarkan Id</h1></center>
<table border="1">
<tr>
<td>No</td>
<td>Nama Buah</td>
<td>Harga</td>
<td>Terjaul</td>
<td>Stok</td>                                 
</tr>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $row->nama_buah ?></td>
<td><?php echo $row->harga ?></td>
<td><?php echo $row->terjual ?></td>
<td><?php echo $row->stok ?></td>                                       
</tr>
<?php } ?>
</table>
</body>
</html>