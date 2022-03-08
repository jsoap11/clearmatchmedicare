<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/summernote/summernote-bs4.css" />

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Static Content</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Static Content</li>
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
            <?php if (!empty($this->session->flashdata('errors'))) : ?>
            <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
               <div class="icon"><span class="mdi mdi-check"></span></div>
               <div class="message">
                  <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                  <strong>  <?= $this->session->flashdata('errors') ?></strong>
               </div>
            </div>
            <?php endif ?>
            <div class="card card-table  card-border-color card-border-color-primary">
               <div class="card-header"> <span class="icon mdi mdi-settings mb-5"></span> Static Content

               </div>
               <div class="card-body">
                  <div class="row ml-5">
                     <div class="col-sm-12">
                        <form action="<?= base_url('robots/robots/write') ?>" enctype="multipart/form-data" method="post" class="form-horizontal blog_settings row-border">
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-10">
                                    <label class=" control-label">Robots content</label>
                                    <textarea name="robots" id="robots" class="form-control" rows="5" required><?php echo $settings; ?></textarea>
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
