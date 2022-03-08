<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/summernote/summernote-bs4.css"/>

<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">State Content</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">State Manager</a></li>
            <li class="breadcrumb-item active">Add State</li>
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
            <?php if (!empty($this->session->flashdata('error'))) : ?>

            <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
               <div class="icon"><span class="mdi mdi-check"></span></div>
               <div class="message">
                  <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                  <strong>  <?= $this->session->flashdata('error') ?></strong>
               </div>
            </div>
            <?php endif ?>
            <div class="card card-table  card-border-color card-border-color-primary">
               <div class="card-header"> <span class="icon fa fa-file-text"></span> Add Content

               </div>
               <div class="card-body">
                  <div class="row mx-2">
                     <div class="col-sm-12">
                        <form action="<?= base_url('state/add') ?>" enctype="multipart/form-data"  method="post" class="form-horizontal row-border">
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12 col-md-12">
                                    <br><br>
                                    <input type="radio" value="2" onclick="changeSlg('medicare-supplement/')" id="medicare_supplement" name="state_filter" <?php echo ($state_filter==2)?'checked':'';?> />&nbsp;
                                    <label for="medicare_supplement" >Medicare Supplement</label>
                                   &nbsp;&nbsp;&nbsp;
                                    <input type="radio" value="1" onclick="changeSlg('medicare-advantage/')" id="medicare_advantage" name="state_filter" <?php echo ($state_filter==1)?'checked':'';?> />&nbsp;
                                    <label for="medicare_advantage" class="control-label">Medicare Advantage</label>
                                   &nbsp;&nbsp;&nbsp;
                                    <input type="radio" value="3" onclick="changeSlg('medicare-part-d/')" id="new_to_medicare" name="state_filter" <?php echo ($state_filter==3)?'checked':'';?> />&nbsp;
                                    <label for="new_to_medicare" class="control-label">Medicare Part D</label>
									 &nbsp;&nbsp;&nbsp;
                                    <input type="radio" value="0" onclick="changeSlg('medicare-by-state/')" id="defult" name="state_filter" <?php echo ($state_filter==0)?'checked':'';?> />
                                    &nbsp;<label for="defult" class="control-label">Defult</label>
                                 </div>
                              </div>
                           </div>
							<div class="form-group">
                              <div class="row">
                              <div class="col-sm-6">
                                    <label class="control-label">
                                       Meta Title
                                    </label>
                                    <input type="text" name="page_title"  id="page_title" class="form-control" placeholder="Enter Page Title" value="<?=$page_title?>">
                                    <span id="titld1">60</span> Character(s) Remaining<br>
								  <span id="temp_slag"></span>
                                    <input type="hidden" name="slug" id="slug"  value="<?=$slug?>">
                                 </div>
                                 <div class="col-sm-6">
                                    <label class="control-label">
                                    Heading 1
                                    </label>
                                    <input  value="<?=$title?>" type="text" name="title" maxlength="180"  id="title" class="form-control" placeholder="Enter Post Title" >
                                    
                                 </div>
                              </div>
                           </div>  
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12 col-md-6">
                                    <label class="control-label">
                                   Canonical Tag
                                    </label>
                                    <input value="<?=$canonical_tag?>" type="text" name="canonical_tag"  id="canonical_tag" class="form-control" placeholder="Enter Canonical Tag" >
                                 </div>
                                 <div class="col-sm-12 col-md-6">
                                    <label class="control-label">Status </label>
                                    <select name="status" class="form-control" >
                                       <option value="1" <?php if($status ==1){echo 'selected';}?>>Publish</option>
                                       <option value="0" <?php if($status ==0){echo 'selected';}?>>Unpublish</option>
                                    </select>
                                 </div>
                              </div>
                           </div>                          

                           <div class="form-group">
                              <div class="row">
                                 
                              <div class="col-sm-6 col-md-6">
                                    <label class="control-label">Meta Description</label>
                                    <textarea name="meta_desc" id="meta_desc" maxlength="180" class="form-control" rows="3" placeholder="Description Must be within 180 characters" >
                                    <?=$meta_desc?>
                                    </textarea>
                                    <span id="rchars">180</span> Character(s) Remaining
                                 </div>
                                 <div class="col-sm-6 col-md-6">
                                    
                                 </div>
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <label class="control-label">Content </label>
                                    <?php
                                    $i=0;
                                     foreach (array_values($post_comment) as $data) : 
                                     $i++;
                                     ?><br><br>
                                       <div class="field_wrapper">
                                          <div class="py-2">
                                             <textarea name="content[]" id="editor_<?php echo $i;?>" class="form-control editor" rows="5"><?php echo $data ?></textarea>
                                             <a href="javascript:void(0);"  class="remove_button btn btn-danger float-right mt-2 mb-2">Remove</a>
                                          </div>
                                       </div>
                                    <?php endforeach ?>
                                    <a href="javascript:void(0);" class="add_button btn btn-primary">Add More</a>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label"></label>
                              <div class="col-sm-12 text-center">
                                 <button type="submit" class="btn btn-primary"> <span class="icon fa fa-save"></span> Save</button>
								  <input type="hidden" id="fntPage" value="medicare-by-state/">
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
		function changeSlg(data){
			$("#fntPage").val(data);
			var slg = $("#slug").val();
			var fPage = $('#fntPage').val();
			$('#canonical_tag').val(base_url+fPage+ slg);
			$('#temp_slag').html('<b>Slug:</b>' + base_url+fPage+ slg + '&nbsp;&nbsp;<span onclick="editSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-edit"></span>');
		}
	</script>
