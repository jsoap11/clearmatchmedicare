<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Blog Tags</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blogs</a></li>
            <li class="breadcrumb-item active"> Blog Tags</li>
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
               <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
                  <div class="icon"><span class="mdi mdi-check"></span></div>
                  <div class="message">
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                     <strong> <?= validation_errors() ?> </strong>
                  </div>
               </div>

            <?php endif ?>

            <div class="card card-table  card-border-color card-border-color-primary">
               <div class="card-header"> <span class="icon mdi mdi-tag-more"></span> Add Blog Tags
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <form id="add_cat_validate" action="<?= base_url('blogs/Tags/add') ?>" method="post" class="form-horizontal row-border">
                           <div class="row">
                              <div class="col-sm-4 offset-sm-4">
                                 <div class="form-group">
                                    <label class="control-label">Add Tag</label>
                                    <input type="text" name="add_tag" class="form-control" required="" placeholder="Enter Tag">
                                    <button type="submit" class="btn btn-info mt-3"> <span class="icon mdi mdi-tag-more"></span> Save</button>
                                 </div>
                              </div>
                           </div>
                        </form>

                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                           <thead>
                              <tr>
                                 <th>Tags</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>

                              <?php if (!empty($tags)) : ?>


                                 <?php

                                 foreach ($tags as $tag) :
                                 ?>

                                    <tr>
                                       <td><?php echo $tag->tag ?></td>
                                       <td>
                                          <a href="#" data-tag-value="<?php echo $tag->tag ?>" data-tag-id="<?php echo $tag->id ?>" id="edit_cat" title="" data-toggle="modal" data-target="#myModal">
                                             <button type="" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                          </a>
                                       </td>
                                       <td>
                                          <a href="<?php bs() ?>blogs/Tags/delete/<?php echo $tag->id ?>" title="">
                                             <button type="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                                Delete
                                             </button>
                                          </a>
                                       </td>
                                    </tr>

                                 <?php endforeach ?>

                              <?php else : ?>

                                 <tr>
                                    <td>
                                       <p>
                                          <font color="red" size="4"><b>Tags Not Added Yet</b></font>
                                       </p>
                                    </td>
                                 </tr>

                              <?php endif ?>

                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade colored-header colored-header-primary" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header modal-header-colored">
               <h3 class="modal-title"> Update Tag </h3>
               <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('blogs/Tags/update') ?>" method="post" class="form-horizontal row-border">
               <div class="form-group">
                  <label class="">Tag</label>
                  <input type="text" name="cat" id="cat" value="" class="form-control" placeholder="Enter Tag" required>
                  <input type="hidden" name="id" id="id" value="" class="form-control">
               </div>
            </div>
            <div class="modal-footer">
               <button class="btn btn-secondary md-close" type="button" data-dismiss="modal">Cancel</button>
               <button class="btn btn-primary md-close" type="submit">Proceed</button>
            </div>
            </form>
         </div>
      </div>
   </div>

   <script>
      $('body').on('click', '#edit_cat', function(event) {
         event.preventDefault();
         /* Act on the event */

         var tag = $(this).attr('data-tag-value');
         var id = $(this).attr('data-tag-id');

         $('#cat').val(tag);
         $('#id').val(id);

      });
   </script>