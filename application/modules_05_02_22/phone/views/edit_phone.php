<div class="be-content">
  <div class="page-head">
    <h2 class="page-head-title">Edit phone</h2>
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb page-head-nav">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Phone</a></li>
        <li class="breadcrumb-item active">Update Phone</li>
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
        <?php if (!empty($this->session->flashdata('errors'))) : ?>
               <div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
                  <div class="icon"><span class="mdi mdi-check"></span></div>
                  <div class="message">
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
                     <strong> <?= $this->session->flashdata('errors') ?> </strong>
                  </div>
               </div>
            <?php endif; ?>
        <div class="card card-table  card-border-color card-border-color-primary">
          <div class="card-header"> <span class="icon mdi mdi-account-box"></span> Update phone

          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-7 offset-sm-2">
                <?= form_open_multipart('phone/edit_phone/'.$id, array('id' => 'phone_form_edit', 'class' => 'form-horizontal validate justify-content-center')); ?>

               
				  <div class="form-group">
					  <label for="leadSource" class="control-label">Lead Source</label>
					  <?php
					  echo form_input($leadSource);
					  ?>
				  </div>
				  <div class="form-group">
					  <label for="refId" class="control-label">Ref Id</label>
					  <?php
					  echo form_input($refId);
					  ?>
				  </div>
				  <div class="form-group">
					  <label for="refIdPhone" class="control-label">Phone</label>
					  <?php
					  echo form_input($refIdPhone);
					  ?>
				  </div>


                <?php echo form_hidden('id', $id); ?>
                  <?php echo form_hidden($csrf); ?>
                <div class="form-group">
                  <div class="text-center">
                    <input type="submit" name="submit" class="finish btn-primary btn" value="Update">
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
