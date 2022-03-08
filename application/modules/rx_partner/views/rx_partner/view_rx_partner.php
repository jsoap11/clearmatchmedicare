<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/summernote/summernote-bs4.css"/>

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">All Brand List</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Brand</a></li>
            <li class="breadcrumb-item active">View Brand</li>
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
               <div class="card-header"> <span class="icon mdi mdi-accounts-outline"></span> View Brand

               </div>
               <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                     <thead>
                        <tr>
                           <th>Type</th>
                           <th>Brand Name</th>
                           <th>Brand Image</th>
                              <th>Status</th>
                              <th>Options</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($rx_partner as $rx_part) : ?>
                           <tr>
                           <td>
                                 <?php if($rx_part->type ==0){ ?>
                                 Rx
                                 <?php } ?>
                                 <?php if($rx_part->type ==1){ ?>
                                 Partner
                                 <?php } ?>
                              </td>
                              <td>
                                 <?php echo htmlspecialchars( $rx_part->rx_partner_name, ENT_QUOTES, 'UTF-8'); ?>
                              </td>
                              <td>
                              <img height="60" src="<?php echo base_url().$rx_part->rx_partner_img;?>">
                              </td>
                                 <td>
                                    <?php echo ($rx_part->active) ? anchor("rx_partner/deactivate/" .  $rx_part->id, lang('index_active_link'), array('class' => 'btn btn-space btn-outline-primary btn-space')) : anchor("rx_partner/activate/" .  $rx_part->id, lang('index_inactive_link'), array('class' => 'btn btn-space btn-outline-danger btn-space')); ?>
                                    </a>
                                 </td>
                                 <td>
                                 <a href="<?= base_url('rx_partner/edit_rx_partner') ?>/<?=  $rx_part->id ?>">
                                       <button class="btn btn-rounded btn-space btn-primary"><span class="icon mdi mdi-edit"></span> Edit</button>
                                    </a>
                                    <button onclick="deleteFunction('<?php echo base_url('rx_partner/delete_banner').'/'.  $rx_part->id; ?>')" class="btn btn-rounded btn-space btn-danger" disable>
                                       <span class="icon mdi mdi-delete"></span> Delete
                                       </button>
                                 </td>
                             
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
