<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/summernote/summernote-bs4.css" />

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Content Settings</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Content Manager</a></li>
            <li class="breadcrumb-item active">Content Settings</li>
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
            <?php if (!empty(validation_errors())) : ?>

               <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
                  <div class="icon"><span class="mdi mdi-check"></span></div>
                  <div class="message">
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                     <strong> <?php echo validation_errors(); ?></strong>
                  </div>
               </div>

            <?php endif ?>
            <div class="card card-table  card-border-color card-border-color-primary">
               <div class="card-header"> <span class="icon mdi mdi-settings mb-5"></span> Content Settings

               </div>
               <div class="card-body">
                  <div class="row ml-5">
                     <div class="col-sm-12">
                        <form action="<?= base_url('state/state_settings/state_settings') ?>" enctype="multipart/form-data" method="post" class="form-horizontal blog_settings row-border">
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-5">
                                    <label class=" control-label">Meta Description</label>
                                    <textarea name="meta_desc" class="form-control" rows="5" placeholder="Complete SEO tips for optimization your web content" required><?php echo $settings->meta_description ?></textarea>
                                 </div>
                                 
                                 <div class="col-sm-5">
                                    <label class=" control-label">Default Image</label>

                                    <?php if (empty($settings->default_img)) : ?>

                                       <label for="blog_img">
                                          <img src="<?php bs() ?>public/assets/img/add-image.png" id="img" width="100" height="100">
                                       </label>
                                       <input id="blog_img" name="img" type="file" class="blog_img visible" style="display: none;" required>

                                    <?php else : ?>

                                       <label for="blog_img">
                                          <img src="<?php bs() ?><?php echo $settings->default_img ?>" id="img" width="100" height="100">
                                       </label>
                                       <input id="blog_img" name="img" type="file" class="blog_img visible" style="display: none;">
                                       <input type="hidden" value="<?php echo $settings->default_img  ?>" name="update_img">

                                    <?php endif ?>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label"></label>
                              <div class="col-sm-12 text-center">
                                 <button type="submit" class="btn btn-primary"> <span class="icon mdi mdi-blogger"></span> Save</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script>
      function first_img(input) {

         if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
               $('#img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
         }
      }

      $(".blog_img").change(function() {
         first_img(this);
      });
   </script>