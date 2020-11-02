<div class="x_panel">
   <div class="x_title">
      <h2>Pemesanan #<?= $this->uri->segment(3) ?></h2>
     <div class="clearfix"></div>
   </div>

   <div class="x_content">
      <br />
      
      <form class="form-horizontal form-label-left" action="<?= base_url('transaksi/resi'); ?>" method="post">

      <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >ID Pemesanan
            </label>
            <div class="col-md-7 col-sm-6 col-xs-12">
               <input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?= $this->uri->segment(3) ?>" name="id">
               <?= form_error('id','<div class="bg-info text-dark"><small>','</small></div>'); ?>
            </div>
         </div>


         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Nomer Resi
            </label>
            <div class="col-md-7 col-sm-6 col-xs-12">
               <input type="text" class="form-control col-md-7 col-xs-12" name="resi">
               <?= form_error('resi','<div class="bg-info text-dark"><small>','</small></div>'); ?>
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
