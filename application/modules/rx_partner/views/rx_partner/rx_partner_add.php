<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Rx and Partner</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Brand</a></li>
            <li class="breadcrumb-item active">Brand Add</li>
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
            <?php if (!empty($this->session->flashdata('error'))) : ?>
               <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
                  <div class="icon"><span class="mdi mdi-check"></span></div>
                  <div class="message">
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                     <strong> <?= $this->session->flashdata('error') ?> </strong>
                  </div>
               </div>
            <?php endif; ?>
            <div class="card card-table card-border-color card-border-color-primary">
               <div class="card-header"> <span class="icon mdi mdi-accounts-outline"></span> Brand Add
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-6 offset-sm-2">
                        <?= form_open_multipart('rx_partner/rx_partner_add', array('id' => 'user_form_validation', 'class' => 'form-horizontal')); ?>
                        <div class="form-group">
                           <input type="radio" value="0" id="rx_type" name="type" <?php echo ($type==0 || $type=='')?'checked':'';?>/>
                           <label for="rx_type" >Rx</label>
                           <br>
                           <input type="radio" value="1" id="partner_type" name="type" <?php echo ($type==1)?'checked':'';?> />
                           <label for="partner_type" class="control-label">Partner</label>
                        </div> 
						 <div class="form-group">
                           <label for="full_name" class="control-label">Additional Disclaimer</label>
                              <input value="<?= $full_name ?>" type="text" id="full_name" name="full_name" class="form-control" placeholder="Full Name"  />
                        </div>
                        <div class="form-group">
                           <label for="rx_partner_name" class="control-label">Brand Name</label>
                              <input value="<?= $rx_partner_name ?>" type="text" id="rx_partner_name" name="rx_partner_name" class="form-control" placeholder="Brand Name"  />
                        </div>
                        <div class="form-group">
                           <label for="phone" class="control-label">Barnd Phone</label>
                              <input value="<?= $phone ?>" type="text" id="phone" name="phone" class="form-control" placeholder="Brand Phone"  />
                        </div>
                        
                        <div class="form-group">
                           <label for="rx_partner_img" class="control-label">Brand Image</label><br>
                           <img height="120" id="rx_partner_img_preview" src="">
                           <p>
                           <br>
                              <input type="file" name="rx_partner_img" id="rx_partner_img" size="20" />
                              </p>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-sm-10">
                                 <label class=" control-label">Header Script</label>
                                 <textarea name="rx_partner_script" id="rx_partner_script" class="form-control" rows="5" required><?php echo $rx_partner_script ?></textarea>
                              </div>
                           </div>
                        </div>
						 <div class="form-group">
                           <div class="row">
                              <div class="col-sm-10">
                                 <label class=" control-label">Find a plan disclaimer</label>
                                 <textarea name="disclaimer" id="disclaimer" class="form-control" rows="5" required><?php echo $disclaimer ?></textarea>
                              </div>
                           </div>
                        </div>
						 <div class="form-group">
                           <label for="temp1_value" class="control-label">Leadsrc(temp1)</label>
                              <input value="<?= $temp1_value ?>" type="text" id="temp1_value" name="temp1_value" class="form-control" placeholder="Brand Leadsrc"  />
                        </div>
						 <div class="form-group">
							 <div class="row">
								 <label class="control-label">Footer Content</label>
								 <textarea name="terms_and_conditions" id="terms_and_conditions" class="form-control" rows="5" placeholder="" ></textarea>
							 </div>
						 </div>
						 <div class="form-group">
							 <div class="row">
								 <label class="control-label">Footer Content Update On</label>
								 <input type="text" name="updateon" id="updateon" value="" class="form-control" placeholder="">
							 </div>
						 </div>
                        <div class="form-group">
                           <label for="active" class="control-label">Is Active</label>
                              <input  type="checkbox" id="active" name="active" />
                        </div>
                        <div class="form-group">
                           <div class="col-md-offset-3">
                              <input type="submit" class="finish btn-success btn" value="Submit">
                           </div>
                           </fieldset>
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

