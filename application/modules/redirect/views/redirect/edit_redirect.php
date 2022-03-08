  <div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Redirect</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Redirect</a></li>
            <li class="breadcrumb-item active">Edit Redirect</li>
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
            <div class="card card-table card-border-color card-border-color-primary">
               <div class="card-header"> <span class="icon mdi mdi-web"></span> Edit Redirect
               </div>
               <div class="card-body">
                  <div class="row">
                  <div class="col-sm-6 offset-sm-2">
                        <?= form_open('redirect/redirect/edit_redirect/'.$post_data[0]->id, array('id' => 'redirect_form_validation', 'class' => 'form-horizontal')); ?>
                        <div class="form-group">
                           <label for="fieldname" class="control-label">Previous URL</label>
                              <input type="text" value="<?php echo $post_data[0]->prv_url;?>" id="prv_url" name="prv_url" class="form-control" placeholder="Previous URL" required />
                              <input type="hidden" value="<?php echo $post_data[0]->id;?>" id="post_id" name="post_id" />
                        </div>
                        <div class="form-group">
                           <label for="fieldname" class="control-label">Current URL</label>
                              <input type="text" value="<?php echo $post_data[0]->crnt_url;?>" id="crnt_url" name="crnt_url" class="form-control" placeholder="Current URL" required />
                        </div>
                        <div class="form-group">
                           <div class="col-md-offset-3">
                              <input type="submit" class="finish btn-success btn" value="Submit">
                           </div>
                           </fieldset>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

</div>
