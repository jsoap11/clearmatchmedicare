<div class="be-content">
   <div class="page-head">
      <h2 class="page-head-title">Landers</h2>
      <nav aria-label="breadcrumb" role="navigation">
         <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Landers</a></li>
            <li class="breadcrumb-item active">Add lander</li>
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
               <div class="card-header"> <span class="icon mdi mdi-accounts-outline"></span> Add Lander
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-8 offset-sm-2">
                        <?= form_open_multipart('lander_manager/add', array('id' => 'user_form_validation', 'class' => 'form-horizontal')); ?>

						 <div class="form-group">
							 <label for="lander_name" class="control-label">Lander Name</label>
							 <input value="<?= $lander_name ?>" type="text" id="lander_name" name="lander_name" class="form-control" placeholder="Lander Name"  />
						 </div>
						 
						 <div class="form-group">
							 <label for="lander_url" class="control-label">Lander URL</label>
							 <input value="<?= $lander_url ?>" type="text" id="lander_url" name="lander_url" class="form-control" placeholder="Lander URL"  />
						 </div>

						 <div class="form-group">
							 <label class=" control-label">Disclaimer</label>
							 <textarea name="disclaimer" id="disclaimer" class="form-control editor" rows="5" required><?php echo $disclaimer ?></textarea>
						 </div>
                        <div class="form-group">
                           <div class="col-md-offset-3">
                              <input type="submit" class="finish btn-success btn" value="Submit">
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
</div>

</div>


