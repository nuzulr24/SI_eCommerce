<h4><i class="fa fa-exchange"></i> Detail Transaksi</h4>
<hr />
<br />
<?php
$data = $get->row();
$datas = $a->row();
?>
<div class="row">
   <div class="col m2 s4">
      <b>Id Pesanan</b>
   </div>
   <div class="co m6 s6">
      <b>: <?= $data->id_order; ?></b>
   </div>
</div>
<div class="row">
   <div class="col m2 s4">
      <b>Tujuan</b>
   </div>
   <div class="co m6 s6">
      <b>: <?= $data->tujuan; ?>, <?= $data->kota; ?></b>
   </div>
</div>
<div class="row">
   <div class="col m2 s4">
      <b>Kurir / Layanan</b>
   </div>
   <div class="co m6 s6">
      <b>: <?= $data->kurir; ?> / <?= $data->service; ?></b>
   </div>
</div>
<?php
if($datas->status == "proses") {
?>
<div class="row">
   <div class="col m2 s4">
      <b>Lacak Resi</b>
   </div>
   <div class="co m6 s6">
   <?php
   
   if($data->kurir == "pos") {
      $courier = "pos-indonesia";
   } else if ($data->kurir == "jne") {
      $courier = "jne";
   }
   ?>
      : <a href="https://track.aftership.com/trackings?courier=<?= $courier ?>&tracking-numbers=<?= $data->resi; ?>">disini</a>
   </div>
</div>
<?php
} else if($datas->status == "selesai") {
   ?>
   <div class="row">
      <div class="col m2 s4">
         <b>Lacak Resi</b>
      </div>
      <div class="co m6 s6">
      <?php
      
      if($data->kurir == "pos") {
         $courier = "pos-indonesia";
      } else if ($data->kurir == "jne") {
         $courier = "jne";
      }
      ?>
         : <a href="https://track.aftership.com/trackings?courier=<?= $courier ?>&tracking-numbers=<?= $data->resi; ?>">disini</a>
      </div>
   </div>
   <?php
   }
?>
<div class="row">
<?php
$telep = $contact->row();
$tel = $telep->telp;
if($datas->status == "belum") {
   echo "<div class='alert alert-info'><b>Informasi</b> Silahkan lakukan konfirmasi pembayaran dengan klik link dibawah <a href='https://api.whatsapp.com/send?phone=62$tel&text=Saya Ingin melakukan konfirmasi pembayaran dengan Kode Pemesanan $data->id_order'>klik disini</a></div>";
} elseif($datas->status == "proses") {
   echo "<div class='alert alert-success'><b>Informasi</b> Terimakasih telah melakukan pembayaran, pemesanan kamu akan segera kami proses secepatnya. Untuk lacak resi dikirim keesokan harinya (setelah pengiriman) Terima Kasih </div>";
} elseif($datas->status == "selesai") {
   echo "<div class='alert alert-success'>Terimakasih telah telah berbelanja di online store kami </div>";
}
?>
   <table class="bordered responsive-table col m8 s12 offset-m1">
      <thead>
         <tr>
            <th width="5%" class="center">#</th>
            <th width="20%" class="center">Nama Item</th>
            <th width="15%" class="center">Jumlah Pesan</th>
            <th width="15%" class="center">Biaya</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $i = 1;
         $total_biaya = 0;
         foreach ($get->result() as $key) :
            $total_biaya += $key->biaya;
         ?>

            <tr>
               <td class="center"><?= $i++; ?></td>
               <td class="center"><?= $key->nama_item; ?></td>
               <td class="center"><?= $key->qty; ?></td>
               <td style="text-align:right">Rp. <?= number_format($key->biaya, 0, ',', '.'); ?>,-</td>
            </tr>

         <?php endforeach; ?>
         <tr>
            <td colspan="3" class="center">Ongkos Kirim</td>
            <td style="text-align:right">Rp. <?php echo number_format($data->total - $total_biaya,0,',','.'); ?>,-</td>
         </tr>
         <tr>
            <td colspan="3" class="center">Total Biaya</td>
            <td style="text-align:right">Rp. <?php echo number_format($data->total,0,',','.'); ?>,-</td>
         </tr>
      </tbody>
   </table>
</div>
<br />
<div class="right">
<?php
if($datas->status == "proses") :
?>
<a href="<?= base_url() ?>home/konfirm_pesanan/<?= $datas->id_order ?>" class="btn green"> Pesanan Diterima </a>
<?php endif; ?>
   <button type="button" class="btn red" onclick="window.history.go(-1)">Kembali</button>
</div>
<br/>
