<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/summernote/summernote-bs4.css"/>

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">All Redirect List</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Redirect</a></li>
            <li class="breadcrumb-item active">View Redirect</li>
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
               <div class="card-header"> <span class="icon mdi mdi-web"></span> View Redirect
				   <a style="float: right;" href="#" onclick="htaccessFunction('<?= base_url("redirect/htaccessFunction") ?>')">Generate Htaccess</a>
               </div>
               <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                     <thead>
                        <tr>
                           <th>Previous URL</th>
                           <th>Current URL</th>
                           <?php if ($this->session->userdata("group_id") == 1) : ?>
                              <th>Options</th>
                           <?php endif ?>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($redirect as $data) : ?>
                           <tr>
                              <td>
                                 <?php echo $data->prv_url; ?>
                              </td>
                              <td>
                                 <?php echo $data->crnt_url; ?>
                              </td>
                              <?php if ($this->session->userdata("group_id") == 1) : ?>
                                 <td>
                                    <a  href="<?= base_url('redirect/edit_redirect') ?>/<?= $data->id ?>')"><span class="icon mdi mdi-edit"></span> Edit</a>
                                    <a onclick="deleteFunction('<?= base_url("redirect/delete_redirect") ?>/<?= $data->id ?>')" href="#"> <span class="icon mdi mdi-delete"></span> Delete</a>
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

