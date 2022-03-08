<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Trashed Blog Posts</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blogs</a></li>
            <li class="breadcrumb-item active">Trashed Blog Posts</li>
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
            <div class="card card-table  card-border-color card-border-color-primary">
               <div class="card-header"> <span class="icon mdi mdi-delete"></span> Trashed Blog Posts

               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                           <thead>
                              <tr>
                                 <th>Post Title</th>
                                 <th>Featured Image</th>
                                 <th>Created at</th>
                                 <th>Status</th>
                                 <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                                 <?php
                                 foreach ($posts as $post) :
                                 ?>
                                    <tr>
                                       <td><?php echo $post->title ?></td>
                                       <td><img src="<?php echo $post->featured_img ?>" alt="Featured Image" width="30"></td>
                                       <td><?php echo date('m-d-Y', strtotime($post->created_at)) ?></td>
                                       
                                       <td>
                                          <?php if ($post->status == 1) : ?>

                                             <a href="<?php bs() ?>blogs/posts/unpublish/<?php echo $post->id ?>" data-toggle="tooltip" data-placement="top" title="Click to Change Status">
                                                <button type="button" class="btn btn-success btn-xs">Publish</button>
                                             </a>

                                          <?php else : ?>

                                             <a href="<?php bs() ?>blogs/posts/publish/<?php echo $post->id ?>" data-toggle="tooltip" data-placement="top" title="Click to Change Status">
                                                <button type="button" class="btn btn-danger btn-xs">Unpublish</button>
                                             </a>

                                          <?php endif ?>
                                       </td>
                                       <td>
                                          <div class="row">
                                             <div class="col-xs-3">
                                                <form action="<?php bs() ?>blogs/posts/permenent_delete" method="post" accept-charset="utf-8">

                                                   <input type="hidden" name="post_id" value="<?php echo $post->id ?>">
                                                   <input type="hidden" name="delete_img" value="<?= $post->featured_img ?>">
                                                   <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete">
                                                      <i class="icon mdi mdi-delete"></i>
                                                   </button>
                                                </form>
                                             </div>
                                             <div class="col-xs-3 pl-3">
                                                <a href="<?php bs() ?>blogs/posts/revert/<?php echo $post->id ?>">
                                                   <button type="button" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Revert">
                                                      <i class="icon mdi mdi-refresh-alt"></i>
                                                   </button>
                                                </a>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>

                                 <?php endforeach ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


      