
</div>
<div id="deleteModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">			
				<h4 class="modal-title">Are you sure?</h4>	
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" id="delete">Delete</button>
			</div>
		</div>
	</div>
</div> 

<div id="htaccessModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">			
				<h4 class="modal-title">Are you sure?</h4>	
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to update .htaccess file ? </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" id="htaccess">Generate</button>
			</div>
		</div>
	</div>
</div> 

<style type="text/css">
	body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-confirm {		
		color: #636363;
		width: 400px;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
		text-align: center;
		font-size: 14px;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
		position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -10px;
		width: 100%;
	}
	.modal-confirm .close {
		position: absolute;
		top: -5px;
		right: -2px;
	}
	.modal-confirm .modal-body {
		color: #999;
	}
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;		
		border-radius: 5px;
		font-size: 13px;
		padding: 10px 15px 25px;
		margin: auto;
	}
	.modal-confirm .modal-footer a {
		color: #999;
	}		
	.modal-confirm .icon-box {
		width: 80px;
		height: 80px;
		margin: 0 auto;
		border-radius: 50%;
		z-index: 9;
		text-align: center;
		border: 3px solid #f15e5e;
	}
	.modal-confirm .icon-box i {
		color: #f15e5e;
		font-size: 46px;
		display: inline-block;
		margin-top: 13px;
	}
	.modal-confirm .btn {
		color: #fff;
		border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
		line-height: normal;
		min-width: 120px;
		border: none;
		min-height: 40px;
		border-radius: 3px;
		margin: 0 5px;
		outline: none !important;
	}
	.modal-confirm .btn-info {
		background: #c1c1c1;
	}
	.modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
		background: #a8a8a8;
	}
	.modal-confirm .btn-danger {
		background: #f15e5e;
	}
	.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
		background: #ee3535;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
<script src="<?= bs() ?>public/b-asset/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/js/app.js" type="text/javascript"></script>

<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/js/app-tables-datatables.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/js/app-form-wysiwyg.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/b-asset/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?= bs() ?>public/assets/js/multiselect.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://makitweb.com/demo/dropdown_select2/select2/js/select2.min.js"></script>
<script src="<?= bs() ?>public/b-asset/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">

	$(document).ready(function() {
		//-initialize the javascript
		App.init();
		App.dataTables();
		App.textEditors();
	});
</script>

</body>