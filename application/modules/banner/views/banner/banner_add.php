<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Users</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Banner</a></li>
            <li class="breadcrumb-item active">Banner Add</li>
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
               <div class="card-header"> <span class="icon mdi mdi-accounts-outline"></span> Banner Add
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-6 offset-sm-2">
                        <?= form_open_multipart('banner/banner_add', array('id' => 'user_form_validation', 'class' => 'form-horizontal')); ?>
                        <div class="form-group">
                           <label for="banner_name" class="control-label">First Name</label>
                              <input value="<?= $banner_name ?>" type="text" id="banner_name" name="banner_name" class="form-control" placeholder="Banner Name"  />
                        </div>
                        
                        <div class="form-group">
                           <label for="banner_img" class="control-label">Banner Image</label><br>
                           <img height="120" id="banner_img_preview" src="">
                           <p>
                           <br>
                              <input type="file" name="banner_img" id="banner_img" size="20" />
                              </p>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-sm-10">
                                 <label class=" control-label">Footer content</label>
                                 <textarea name="banner_content" id="banner_content" class="form-control" rows="5" required><?php echo $banner_content ?></textarea>
                              </div>
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
		$("#banner_img").change(function() {
		  readURL(this);
		});
   });
   
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#banner_img_preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


</script>

<script>
setTimeout(function() {
      CKEDITOR.replace('banner_content', {
         height: 300,
         filebrowserUploadUrl: base_url + "blog/posts/uploadimge"
      });
}, 200);
</script>