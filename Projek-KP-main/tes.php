<?php
    session_start();
    include 'db.php';
    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }

function combotgl($awal, $akhir, $var, $terpilih){

  echo "<select name=$var>";

  for ($i=$awal; $i<=$akhir; $i++){

    $lebar=strlen($i);

    switch($lebar){

      case 1:

      {

        $g="0".$i;

        break;    

      }

      case 2:

      {

        $g=$i;

        break;    

      }     

    } 

    if ($i==$terpilih)

      echo "<option value=$g selected>$g</option>";

    else

      echo "<option value=$g>$g</option>";

  }

  echo "</select> ";

}

 

function combobln($awal, $akhir, $var, $terpilih){

  echo "<select name=$var>";

  for ($bln=$awal; $bln<=$akhir; $bln++){

    $lebar=strlen($bln);

    switch($lebar){

      case 1:

      {

        $b="0".$bln;

        break;    

      }

      case 2:

      {

        $b=$bln;

        break;    

      }     

    } 

      if ($bln==$terpilih)

         echo "<option value=$b selected>$b</option>";

      else

        echo "<option value=$b>$b</option>";

  }

  echo "</select> ";

}

 

function combothn($awal, $akhir, $var, $terpilih){

  echo "<select name=$var>";

  for ($i=$awal; $i<=$akhir; $i++){

    if ($i==$terpilih)

      echo "<option value=$i selected>$i</option>";

    else

      echo "<option value=$i>$i</option>";

  }

  echo "</select> ";

}

 

function combonamabln($awal, $akhir, $var, $terpilih){

  $nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei",

                      "Juni", "Juli", "Agustus", "September",

                      "Oktober", "November", "Desember");

  echo "<select name=$var>";

  for ($bln=$awal; $bln<=$akhir; $bln++){

      if ($bln==$terpilih)

         echo "<option value=$bln selected>$nama_bln[$bln]</option>";

      else

        echo "<option value=$bln>$nama_bln[$bln]</option>";

  }

  echo "</select> ";

}

 

?>
 <html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Laporan Data</title>

</head>

<table class='table1'>

              <tr>

<td align="center" colspan='2'>

<h2>CONTOH DATA</h2>

<h2>LAPORAN PENJUALAN PRODUK </h2>

 

                   </td>

              </tr>

<strong><hr></strong>

 

<table border='1' class='table'>

<tr>

<th align="center">No.</th>

<th>Tanggal Order</th>

<th>Nama Produk</th>

<th>Nama Pelanggan</th>

<th>Email /Kontak</th>

<th>Alamat Pengiriman</th>

<th>Qty </th><th>Diskon </th>

<th>Harga + Ongkir </th>

</tr>

 

<?php

include "db.php";

include "fungsi_combobox.php";

$tgl_awal = $_POST['thn_mulai']."-".$_POST['bln_mulai']."-".$_POST['tgl_mulai'];

$tgl_akhir = $_POST['thn_selesai']."-".$_POST['bln_selesai']."-".$_POST['tgl_selesai'];


 
                            $no = 1;
                            $tampil = mysqli_query($conn, "SELECT * FROM `tb_suspek` WHERE `status` like 'Aktif';
                            ");
                                    while($data = mysqli_fetch_array($tampil)) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nomor_penerbangan'] ?></td>
                                <td><?= $data['nama_penumpang'] ?></td>
                                <td><?= $data['status'] ?></td>
                                <?php } 
 

$cnt=1;

while($row=mysql_fetch_array($query)){

     $tgl=tgl_indo($row['tgl_order']);

     $sale   = $row[harga]*$row[diskon]/100 * $row[jumlah];

      $subtotal    = $row[jumlah]*$row[harga]+$row[ongkos_kirim]- $sale;

    $total       = $total + $subtotal;

    $sub_jum    = $row[jumlah];  

    $total_j     = $total_j + $sub_jum; 
  }

?>

<tr>

<td align='center'><?php echo $cnt ?>.</td>

<td align="center"><?php echo htmlentities($tgl);?></td>

<td> &nbsp; <?php echo htmlentities($row['nomor_penerbangan']);?></td>

<td> &nbsp; <?php echo $row['nama_penumpang'];?></td>

<td> &nbsp; <?php echo $row['status'];?> / <?php echo $row['telpon'];?> </td>
                                            

</tr>

</table>

<body>

</body>

</html>