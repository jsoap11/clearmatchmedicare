<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/summernote/summernote-bs4.css"/>

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">All Video List</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Videos</a></li>
            <li class="breadcrumb-item active">View Video</li>
         </ol>
      </nav>
   </div>
   <div class="main-content container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <?php if(!empty($this->session->flashdata('success'))): ?>
            <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
               <div class="icon"><span class="mdi mdi-check"></span></div>
               <div class="message">
                  <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                  <strong> <?= $this->session->flashdata('success') ?> </strong>
               </div>
            </div>
            <?php endif; ?>
            <div class="card card-table  card-border-color card-border-color-primary">
               <div class="card-header">
               </div>
               <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                     <thead>
                        <tr>
							<th width="60%">Title</th>
							<th width="20%">Category</th>
							<th width="10%">Status</th>
							<th  width="10%">Options</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($video as $data) : ?>
                           <tr>
                              <td>
                                 <?php echo $data->title; ?>
                              </td>
							   <td>
								   <?php if ($data->cat_id == 1){ ?>
								   Medicare
								   <?php } ?>
								   <?php if ($data->cat_id == 2){ ?>
								   Healthy Living
								   <?php } ?>
								   <?php if ($data->cat_id == 3){ ?>
								   Retirement
								   <?php } ?>
                              </td>
							   <td>
                                 <?php if ($data->is_active == 1) : ?>
								   Active
									<?php else : ?>
								   Inactive
									<?php endif ?>
                              </td>
                              <?php if ($this->session->userdata("group_id") == 1) : ?>
                                 <td>
                                    <a  href="<?= base_url('video/edit_video') ?>/<?= $data->id ?>"><span class="icon mdi mdi-edit"></span> Edit</a>
                                    <a onclick="deleteFunction('<?= base_url("video/delete_video") ?>/<?= $data->id ?>')" href="#"> <span class="icon mdi mdi-delete"></span> Delete</a>
                                 </td>
                              <?php endif ?>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

