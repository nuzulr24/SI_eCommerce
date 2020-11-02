<div class="x_panel">
   <div class="x_title">
      <h2>Ubah Kontak Whatsapp</h2>
     <div class="clearfix"></div>
   </div>

   <div class="x_content">
      <br />
      <?php
      $pro = $get->row();
      ?>
      <form class="form-horizontal form-label-left" action="<?= base_url('contact'); ?>" method="post">

         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Nomer Whatsapp
            <small>*tanpa 0 jadi cukup 81********</small>
            </label>
            <div class="col-md-7 col-sm-6 col-xs-12">
               <input type="text" class="form-control col-md-7 col-xs-12" value="<?= $pro->telp ?>" name="telp">
               <?= form_error('telp','<div class="bg-info text-dark"><small>','</small></div>'); ?>
            </div>
         </div>
         

         <div class="ln_solid"></div>

         <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
               <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
              <button type="button" onclick="window.history.go(-1)" class="btn btn-primary" >Kembali</button>
            </div>
         </div>

     </form>
   </div>
</div>
