<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Users Roles & Permissions</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Roles & Permissions</a></li>
            <li class="breadcrumb-item active">Permissions</li>
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
               <div class="card-header ">
                  <span class="icon mdi mdi-account-o"></span> All Permissions
                  <span class="float-right">
                     <button id="loading-btn" class="btn btn-rounded btn-space btn-primary" data-toggle="modal" data-target="#headModel"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Add Head Permission
                     </button>
                     <button class="btn btn-rounded btn-space btn-success" data-toggle="modal" href="#myModal">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Permission
                     </button>
                  </span>
               </div>
               <div class="card-body">
                  <div class="row ml-5 mt-4">
                     <div class="col-sm-6 offset-sm-2">
                        <div id="tree-default" style="margin-top:2em">
                           <ul>
                              <?php foreach ($head_permissions as $head_perm) : ?>
                                 <li>
                                    <?= $head_perm->icon ?> <?= $head_perm->perm_name ?>
                                    <span class="float-right">
                                       <a href="" data-level="<?= $head_perm->level ?>" data-id="<?= $head_perm->perm_id ?>" class=" update">
                                          <i class="icon mdi mdi-edit" aria-hidden="true"></i>
                                       </a>
                                       <a href="<?= bs() ?>users/Permissions/delete_perm/<?= $head_perm->perm_id ?>" style="padding-left:5px;color:red">
                                          <i class="icon mdi mdi-delete" aria-hidden="true"></i>
                                       </a>
                                    </span>
                                    <ul>
                                       <?php foreach ($sub_permissions as $sub_perm) : ?>
                                          <?php
                                          if ($head_perm->perm_id == $sub_perm->parent_id) :
                                          ?>
                                             <li>
                                                <?= $sub_perm->icon ?> <?= $sub_perm->perm_name ?>
                                                <span class="float-right">
                                                   <a href="" data-level="<?= $sub_perm->level ?>" data-id="<?= $sub_perm->perm_id ?>" class=" update">
                                                      <i class="icon mdi mdi-edit" aria-hidden="true"></i>
                                                   </a>
                                                   <a href="<?= bs() ?>users/Permissions/delete_perm/<?= $sub_perm->perm_id ?>" style="padding-left:5px;color:red">
                                                      <i class="icon mdi mdi-delete" aria-hidden="true"></i>
                                                   </a>
                                                </span>
                                             </li>
                                          <?php endif; ?>
                                       <?php endforeach; ?>
                                    </ul>
                                 </li>
                              <?php endforeach; ?>
                              <!-- <li>
                                       <a href="http://www.jstree.com">
                                          Clickanle link node </a>
                                    </li> -->
                           </ul>
                        </div>

                     </div>
                  </div>
               </div>
               <?php echo form_close(); ?>

            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- Modal -->

<!-- Head Permission Modal -->
<div class="modal fade colored-header colored-header-primary" id="headModel" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header modal-header-colored">
            <h3 class="modal-title"> <span class="icon mdi mdi-plus-circle-o-duplicate"></span> Add Head Permission </h3>
            <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
         </div>
         <div class="modal-body">
            <form action="<?= base_url('users/Permissions') ?>" method="post" role="form">
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Head Permission Name </font>&nbsp;
                  </label>
                  <input type="text" name="perm_name" id="perm" class="form-control" placeholder="example.. Dashboard,Users etc" required>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Add Icon </font>&nbsp;
                  </label>
                  <input type="text" name="icon" id="icon" class="form-control" placeholder='example.. <i class="fa fa-trash" aria-hidden="true"></i>' required>
                  <p class="help-block">Just copy and paste icons from font Awesome</p>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Add URL (Optional) </font>&nbsp;
                  </label>
                  <input type="text" name="url" id="url" class="form-control" placeholder="example .. Module/Controller/Function">
                  <p class="help-block">Specify Module Name / Controller Name / function Name</p>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
         </div>

         </form>
      </div>
   </div>
</div>

<!-- Sub Permission Modal -->
<div class="modal fade colored-header colored-header-primary" id="myModal" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header modal-header-colored">
            <h3 class="modal-title"> <span class="icon mdi mdi-plus-circle-o-duplicate"></span> Add Sub Permission </h3>
            <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
         </div>
         <div class="modal-body">
            <form class="" action="<?= base_url('users/Permissions/sub_permission') ?>" method="post" role="form">
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Head Permission </font>&nbsp;
                  </label>
                  <select name="head_perm" class="form-control" required>
                     <option value="">Select Head Permision</option>
                     <?php foreach ($head_permissions as $head) : ?>
                        <option value="<?= $head->perm_id ?>"><?= $head->perm_name ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Permission Name </font>&nbsp;
                  </label>
                  <input type="text" name="perm" id="perm" class="form-control" placeholder="Permission Name" required>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Add URL </font>&nbsp;
                  </label>
                  <input type="text" name="url" id="url" class="form-control" placeholder="example .. Module/Controller/Function" required>
                  <p class="help-block">Specify Module Name / Controller Name / function Name</p>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
         </div>
         </form>
      </div>
   </div>
</div>


<!-- Update Head Permission Modal -->
<div class="modal fade colored-header colored-header-primary" id="updateheadModel" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header modal-header-colored">
            <h3 class="modal-title"> <span class="icon mdi mdi-edit"></span> Update Head Permission </h3>
            <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
         </div>
         <div class="modal-body">
            <form action="<?= base_url('users/Permissions/update_perm') ?>" method="post" role="form">
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Head Permission Name </font>&nbsp;
                  </label>
                  <input type="text" name="perm_name" id="update_perm" class="form-control" value="" required>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Add Icon </font>&nbsp;
                  </label>
                  <input type="text" name="icon" id="update_icon" class="form-control" value=''>
                  <p class="help-block">Just copy and paste icons from font Awesome</p>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Add URL (Optional) </font>&nbsp;
                  </label>
                  <input type="text" name="url" id="update_url" class="form-control" value="">
                  <p class="help-block">Specify Module Name / Controller Name / function Name</p>
               </div>
               <input type="hidden" name="id" id="head_id" value="">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> Close</button>
            <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update changes</button>
         </div>
         </form>

      </div>
   </div>
</div>


<!-- Sub Permission Modal -->
<div class="modal fade colored-header colored-header-primary" id="updatesubmyModal" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header modal-header-colored">
            <h3 class="modal-title"> <span class="icon mdi mdi-edit"></span> Update Sub Permission </h3>
            <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
         </div>
         <div class="modal-body">
            <form class="" action="<?= base_url('users/Permissions/update_sub_permission') ?>" method="post" role="form">
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Head Permission </font>&nbsp;
                  </label>
                  <select name="head_perm" value='' class="form-control" id="default_select" required>
                     <?php foreach ($head_permissions as $head) : ?>
                        <option value="<?= $head->perm_id ?>">
                           <?= $head->perm_name ?>
                        </option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Permission Name </font>&nbsp;
                  </label>
                  <input type="text" name="perm" id="sub_perm" class="form-control" placeholder="Permission Name" required>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Add URL </font>&nbsp;
                  </label>
                  <input type="text" name="url" id="sub_url" class="form-control" placeholder="example .. Module/Controller/Function" required>
                  <p class="help-block">Specify Module Name / Controller Name / function Name</p>
               </div>
               <input type="hidden" name="id" id="sub_id" value="">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times-circle" aria-hidden="true"></i> Close</button>
            <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update changes</button>
         </div>

         </form>

      </div>
   </div>
</div>

<script>
   $(document).ready(function() {

      $("body").on('click', '.update', function(event) {
         event.preventDefault();

         var level = $(this).attr('data-level');
         var id = $(this).attr('data-id');

         $.ajax({

            url: "<?php bs('users/permissions/get_perm') ?>/" + id,
            type: 'POST',
            data: {
               id: id,
               level: level,
            },
            success: function(success) {
               var obj = $.parseJSON(success);
               if (obj.level == 0) {

                  $('#updateheadModel').modal('show');
                  $('#update_perm').val(obj.perm_name);
                  $('#update_icon').val(obj.icon);
                  $('#update_url').val(obj.url);
                  $('#update_url').val(obj.url);
                  $('#head_id').val(obj.perm_id);
               } else {
                  $('#updatesubmyModal').modal('show');
                  $('#default_select').val(obj.parent_id)
                  $('#sub_perm').val(obj.perm_name)
                  $('#sub_url').val(obj.url)
                  $('#sub_id').val(obj.perm_id)
               }
            }

         })
      })
   });
</script>