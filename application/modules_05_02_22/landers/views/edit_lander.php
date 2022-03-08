<div class="be-content">
  <div class="page-head">
    <h2 class="page-head-title">Edit Lander</h2>
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb page-head-nav">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Landers</a></li>
        <li class="breadcrumb-item active">Update Lander</li>
      </ol>
    </nav>
  </div>
  <div class="main-content container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <?php if (!empty($this->session->flashdata('success'))) : ?>
          <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
            <div class="icon"><span class="mdi mdi-check"></span></div>
            <div class="message">
              <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
              <strong> <?= $this->session->flashdata('success') ?> </strong>
            </div>
          </div>
        <?php endif; ?>
        <?php if (!empty($this->session->flashdata('errors'))) : ?>
               <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
                  <div class="icon"><span class="mdi mdi-check"></span></div>
                  <div class="message">
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                     <strong> <?= $this->session->flashdata('errors') ?> </strong>
                  </div>
               </div>
            <?php endif; ?>
        <div class="card card-table  card-border-color card-border-color-primary">
          <div class="card-header"> <span class="icon mdi mdi-account-box"></span> Update Lander

          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-7 offset-sm-2">
                <?= form_open_multipart('landers/edit_lander/'.$id, array('id' => 'social_config', 'class' => 'form-horizontal validate justify-content-center')); ?>

               
				  <div class="form-group">
					  <label for="lander_name" class="control-label">Lander Name</label>
					  <?php
					  echo form_input($lander_name);
					  ?>
				  </div>
				  <div class="form-group">
					  <label class="control-label">TCPA</label>
					  <textarea name="lander_tcpa" id="lander_tcpa" class="form-control editor" rows="5" required><?php echo $lander_tcpa ?></textarea>
				  </div>

                <?php echo form_hidden('id', $id); ?>
                  <?php echo form_hidden($csrf); ?>
                <div class="form-group">
                  <div class="text-center">
                    <input type="submit" name="submit" class="finish btn-primary btn" value="Update">
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
   $(document).ready(function() {
		$("#rx_partner_img").change(function() {
		  readURL(this);
		});
   });
   
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#rx_partner_img_preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


</script>