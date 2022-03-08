<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Menu</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Settings</a></li>
            <li class="breadcrumb-item active">Menu</li>
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
                  <span class="icon mdi mdi-account-o"></span> All Menu
                  <span class="float-right">
                     <button id="loading-btn" class="btn btn-rounded btn-space btn-primary" data-toggle="modal" data-target="#headModel"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Main Menu
                     </button>
                     <button class="btn btn-rounded btn-space btn-success" data-toggle="modal" href="#myModal">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Menu
                     </button>
                     <button class="btn btn-rounded btn-space btn-success" data-toggle="modal" href="#subSubMenuModal">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Sub Sub Menu
                     </button>
                  </span>
               </div>
               <div class="card-body">
                  <div class="row ml-5 mt-4">
                     <div class="col-sm-6 offset-sm-2">
                        <div id="tree-default" style="margin-top:2em">
                           <ul>
                              <?php foreach ($head_menu as $headMenu) : ?>
                                 <li>
                                     <?= $headMenu->menu_name ?>
                                    <span class="float-right">
                                       <a href="javascript:void(0)" onClick="editMenu('<?= $headMenu->level ?>','<?= $headMenu->menu_id ?>')"  class="update">
                                          <i class="icon mdi mdi-edit" aria-hidden="true"></i>
                                       </a>
                                       <a onclick="deleteFunction('<?= bs() ?>menu/delete_menu/<?= $headMenu->menu_id ?>')" href="javascript:void(0)" style="padding-left:5px;color:red">
                                          <i class="icon mdi mdi-delete" aria-hidden="true"></i>
                                       </a>
                                    </span>
                                    <ul>
                                       <?php foreach ($sub_menu as $subMenu) : ?>
                                          <?php
                                          if ($headMenu->menu_id == $subMenu->parent_id) :
                                          ?>
                                             <li>
                                                <?= $subMenu->menu_name ?>
                                                <span class="float-right">
                                                   <a href="javascript:void(0)"  onClick="editMenu('<?= $subMenu->level ?>','<?= $subMenu->menu_id ?>')"  class="update">
                                                      <i class="icon mdi mdi-edit" aria-hidden="true"></i>
                                                   </a>
                                                   <a onclick="deleteFunction('<?= bs() ?>menu/delete_menu/<?= $subMenu->menu_id ?>')" href="javascript:void(0)" style="padding-left:5px;color:red">
                                                      <i class="icon mdi mdi-delete" aria-hidden="true"></i>
                                                   </a>
                                                </span>
                                                <ul>
                                                   <?php foreach ($sub_sub_menu as $subSubMenu) : ?>
                                                      <?php
                                                      if ($subMenu->menu_id == $subSubMenu->parent_id) :
                                                      ?>
                                                         <li>
                                                            <?= $subSubMenu->menu_name ?>
                                                            <span class="float-right">
                                                               <a href="javascript:void(0)"  onClick="editMenu('<?= $subSubMenu->level ?>','<?= $subSubMenu->menu_id ?>')"  class="update">
                                                                  <i class="icon mdi mdi-edit" aria-hidden="true"></i>
                                                               </a>
                                                               <a onclick="deleteFunction('<?= bs() ?>menu/delete_menu/<?= $subSubMenu->menu_id ?>')" href="javascript:void(0)" style="padding-left:5px;color:red">
                                                                  <i class="icon mdi mdi-delete" aria-hidden="true"></i>
                                                               </a>
                                                            </span>
                                                         </li>
                                                      <?php endif; ?>
                                                   <?php endforeach; ?>
                                                </ul>
                                             </li>
                                          <?php endif; ?>
                                       <?php endforeach; ?>
                                    </ul>
                                 </li>
                              <?php endforeach; ?>
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
            <h3 class="modal-title"> <span class="icon mdi mdi-plus-circle-o-duplicate"></span> Add Main Menu </h3>
            <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
         </div>
         <div class="modal-body">
            <form action="<?= base_url('menu') ?>" id="mainMenuFrm" method="post" role="form">
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Main menu </font>&nbsp;
                  </label>
                  <select name="post_id" id='mainMenuSelect' style='width: 100%;' class="form-control" onchange="getDataFromDropDown()">
                  <option value=''>Select Menu</option>  
                  <?php foreach ($allPost as $all_post) : ?>
                     <option value='<?= $all_post->id ?>' slug='<?= $all_post->slug ?>'><?= $all_post->page_title ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Menu name </font>&nbsp;
                  </label>
                  <input type="text" name="menu_name" id="menu_name" class="form-control"  required>
                  <input type="hidden" name="slug" id="slug">
                  <input type="hidden" name="id" id="id">
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
            <h3 class="modal-title"> <span class="icon mdi mdi-plus-circle-o-duplicate"></span> Add Sub Menu</h3>
            <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
         </div>
         <div class="modal-body">
            <form class="" action="<?= base_url('menu/sub_menu') ?>" id="subMenuFrm" method="post" role="form">
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Parent Menu </font>&nbsp;
                  </label>
                  <select name="parent_id" id="parent_id" class="form-control" required>
                     <option value="">Select Parent Menu</option>
                     <?php foreach ($head_menu as $head) : ?>
                        <option value="<?= $head->menu_id ?>"><?= $head->menu_name ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Main menu </font>&nbsp;
                  </label>
                  <select name="post_id" id='subMenuSelect' style='width: 100%;' class="form-control" onchange="getDataFromDropDown2()">
                  <option value=''>Select Menu</option>  
                  <?php foreach ($allPost as $all_post) : ?>
                     <option value='<?= $all_post->id ?>' slug='<?= $all_post->slug ?>'><?= $all_post->page_title ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Menu name </font>&nbsp;
                  </label>
                  <input type="text" name="menu_name" id="menu_name2" class="form-control"  required>
                  <input type="hidden" name="slug" id="slug2">
                  <input type="hidden" name="id" id="id2">
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
<div class="modal fade colored-header colored-header-primary" id="subSubMenuModal" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header modal-header-colored">
            <h3 class="modal-title"> <span class="icon mdi mdi-plus-circle-o-duplicate"></span> Add Sub Menu</h3>
            <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
         </div>
         <div class="modal-body">
            <form class="" action="<?= base_url('menu/sub_sub_menu') ?>" id="subsubMenuFrm" method="post" role="form">
               <div class="form-group">
                  <label>
                     <font color="#8bc34a"> Parent Menu </font>&nbsp;
                  </label>
                  <select name="parent_id" id="parent_id2" class="form-control" required>
                     <option value="">Select Parent Menu</option>
                     <?php foreach ($sub_menu as $head) : ?>
                        <option value="<?= $head->menu_id ?>"><?= $head->menu_name ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Main menu </font>&nbsp;
                  </label>
                  <select name="post_id" id='subSubMenuSelect' style='width: 100%;' class="form-control" onchange="getDataFromDropDown3()">
                  <option value=''>Select Menu</option>  
                  <?php foreach ($allPost as $all_post) : ?>
                     <option value='<?= $all_post->id ?>' slug='<?= $all_post->slug ?>'><?= $all_post->page_title ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>
                     <font color="#8bc34a">Menu name </font>&nbsp;
                  </label>
                  <input type="text" name="menu_name" id="menu_name3" class="form-control"  required>
                  <input type="hidden" name="slug" id="slug3">
                  <input type="hidden" name="id" id="id3">
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

<script>
   function editMenu(level,id){
      $.ajax({
            url: "<?php bs('menu/get_perm') ?>/" + id,
            type: 'POST',
            data: {
               id: id,
               level: level
            },
            success: function(success) {
               var obj = $.parseJSON(success);
               if (obj.level == 0) {
                  $('#headModel').modal('show');
                  $("#mainMenuSelect").select2().val(obj.post_id).trigger("change");
                  $('#menu_name').val(obj.menu_name);
                  $('#slug').val(obj.slug);
                  $('#id').val(obj.menu_id);
                  $('#mainMenuFrm').attr("action","<?= base_url('menu/update_menu') ?>");
               } else if(obj.level == 1) {
                  $('#myModal').modal('show');
                  $("#subMenuSelect").select2().val(obj.post_id).trigger("change");
                  $('#parent_id').val(obj.parent_id);
                  $('#menu_name2').val(obj.menu_name);
                  $('#slug2').val(obj.slug);
                  $('#id2').val(obj.menu_id);
                  $('#subMenuFrm').attr("action","<?= base_url('menu/update_menu') ?>");
               } else if(obj.level == 2) {
                  $('#subSubMenuModal').modal('show');
                  $("#subSubMenuSelect").select2().val(obj.post_id).trigger("change");
                  $('#parent_id2').val(obj.parent_id);
                  $('#menu_name3').val(obj.menu_name);
                  $('#slug3').val(obj.slug);
                  $('#id3').val(obj.menu_id);
                  $('#subsubMenuFrm').attr("action","<?= base_url('menu/update_menu') ?>");
               }
            }
         })
   }

</script>