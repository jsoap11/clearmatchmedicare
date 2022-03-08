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
               <div class="card-header"> <span class="icon mdi mdi-accounts-outline"></span> Brand Add
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-sm-8 offset-sm-2">
                        <?= form_open_multipart('phone/phone_add', array('id' => 'phone_form_validation', 'class' => 'form-horizontal')); ?>

						 <div class="form-group">
							 <label for="leadSource" class="control-label">Lead Source</label>
							 <input value="<?= $leadSource ?>" type="text" id="leadSource" name="leadSource" class="form-control" placeholder="Lead Source"  />
						 </div>
						 <div class="form-group">
							 <label for="refId" class="control-label">Ref Id</label>
							 <input value="<?= $refId ?>" type="text" id="refId" name="refId" class="form-control" placeholder="Ref Id"  />
						 </div>
						 <div class="form-group">
							 <label for="refIdPhone" class="control-label">Phone</label>
							 <input value="<?= $refIdPhone ?>" type="text" id="refIdPhone" name="refIdPhone" class="form-control" placeholder="Phone Number"  />
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


