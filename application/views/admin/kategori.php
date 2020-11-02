<div class="x_panel">
   <div class="x_title">
      <h2>Tambah Kategori</h2>
     <div class="clearfix"></div>
   </div>

   <div class="x_content">
      <br />
      
      <form class="form-horizontal form-label-left" action="<?= base_url('item/add_tag'); ?>" method="post">

      <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Nama Kategori
            </label>
            <div class="col-md-7 col-sm-6 col-xs-12">
               <input type="text" class="form-control col-md-7 col-xs-12" name="kategori">
               <?= form_error('kategori','<div class="bg-info text-dark"><small>','</small></div>'); ?>
            </div>
         </div>


         <div class="form-group">
            <label class="control-label col-md-2 col-sm-2 col-xs-12" >URL Kategori
            </label>
            <div class="col-md-7 col-sm-6 col-xs-12">
               <input type="text" class="form-control col-md-7 col-xs-12" placeholder="cth: jam-dinding" name="url">
               <small>gunakan tanda - apabila melebihi 1 kalimat</small>
               <?= form_error('url','<div class="bg-info text-dark"><small>','</small></div>'); ?>
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
