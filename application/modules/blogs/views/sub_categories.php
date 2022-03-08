<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Sub Categories</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active"> Add Sub Category</li>
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
               <div class="card-header"> <span class="icon mdi mdi-tag-more"></span> Add Sub Category
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <form id="add_cat_validate" action="<?= base_url('blogs/BlogSubCategory/add') ?>" method="post" class="form-horizontal row-border">
                           <div class="row">
                              <div class="col-sm-4 offset-sm-4">
                                 <div class="form-group">
									<label class="">Parent Category</label>
									 <select name="add_parent_cat" class="form-control" required>
										 <option value="">Select Category</option>
										 <?php
											foreach ($parentCategories as $p_cat) :
										 ?> 
										 	<option value="<?php echo $p_cat->id ?>"><?php echo $p_cat->cat_name ?></option>
										 <?php endforeach ?>
									 </select>	 
                                    <label class="">Sub Category</label>
                                    <input type="text" name="add_cat" class="form-control" required>
                                    <button type="submit" class="btn btn-info mt-3"> <span class="icon mdi mdi-tag-more"></span> Save</button>
                                 </div>
                              </div>
                           </div>
                        </form>

                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                           <thead>
                              <tr>
                                 <th>Parent Categories</th>
								 <th>Sub Categories</th>
                                 <th>Edit</th>
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php if (!empty($categories)) : ?>
                                 <?php
                                 foreach ($categories as $category) :
                                 ?>
                                    <tr>
									<td><?php echo $this->common_model->getCatName($category->parent_id); ?></td>
                                       <td><?php echo $category->cat_name ?></td>
                                       <td>
                                          <a href="#" data-category-value="<?php echo $category->cat_name ?>" data-category-id="<?php echo $category->id ?>" id="edit_cat" title="" data-toggle="modal" data-target="#myModal">
                                             <button type="" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                          </a>
                                       </td>
                                       <td>
                                          <a href="<?php bs() ?>blogs/BlogSubCategory/delete/<?php echo $category->id ?>" title="">
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
                                    <td colspan="5">
                                       <p>
                                          <font color="red" size="4"><b>Categories Not Added Yet</b></font>
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
               <h3 class="modal-title"> Update Category </h3>
               <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('blogs/BlogSubCategory/update') ?>" method="post" class="form-horizontal row-border">
                  <div class="form-group">
                     <label class="control-label text-success">Category</label>
                     <input type="text" name="cat" id="cat" value="" class="form-control" required>
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

         var category = $(this).attr('data-category-value');
         var id = $(this).attr('data-category-id');

         $('#cat').val(category);
         $('#id').val(id);

      });
   </script>