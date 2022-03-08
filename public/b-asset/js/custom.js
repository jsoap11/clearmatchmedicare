$(document).ready(function() {
	$("#blog_table").dataTable({
		'stateSave':true
	});
	$("#medicare_table").dataTable({
		'stateSave':true
	});
	$("#retirement_table").dataTable({
		'stateSave':true
	});
	$("#healthy_table").dataTable({
		'stateSave':true
	});
	// document.multiselect('#testSelect1');
	$('#tags').multiselect({
		columns: 1,
		placeholder: 'Select Tags',
		search: true,
		selectAll: true
	});
	$("#topics").multiselect({
		columns: 1,
		placeholder: 'Select Topics',
		search: true,
		selectAll: true
	});
	$('#category').multiselect({
		columns: 1,
		placeholder: 'Select Category',
		search: true,
		selectAll: true
	});

	$("#add1_edit_post").validate({
		errorElement: "label",
		errorClass: "error",
		ignore: [],
		rules: {
			title: {
				required: true,
				maxlength: 60
			},
			odd_redirecr: {
				url: true
			},
			canonical_tag: {
				required: true
			},
			'category[]': {
				required: true
			},
			meta_desc: {
				required: true
			},
			meta_keywords: {
				required: true
			},
			status: {
				required: true
			},
			allow_comments: {
				required: true
			},
			publish_date: {
				required: true
			},
			add_date: {
				required: true
			},
			'tags[]': {
				required: true
			},
			'content[]': {
				required: true
			}
		}
	});

	$("#add_edit_post").validate({
		errorElement: "label",
		errorClass: "error",
		ignore: [],
		rules: {
			title: {
				required: true,
				maxlength: 60
			},
			odd_redirecr: {
				url: true
			},
			canonical_tag: {
				required: true
			},
			'category[]': {
				required: true
			},
			meta_desc: {
				required: true
			},
			meta_keywords: {
				required: true
			},
			img: {
				required: true
			},
			status: {
				required: true
			},
			allow_comments: {
				required: true
			},
			publish_date: {
				required: true
			},
			add_date: {
				required: true
			},
			file: {
				required: true
			},
			'tags[]': {
				required: true
			},
			'content[]': {
				required: true
			}
		}
	});

	$("#redirect_form_validation").validate({
		errorElement: "label",
		errorClass: "error",
		rules: {
			prv_url: {
				required: true,
				url: true
			},
			crnt_url: {
				required: true,
				url: true
			},
		}
	});

	$("#add_date").datepicker({
		dateFormat: "yy-mm-dd"
	});
	$("#publish_date").datepicker({
		dateFormat: "yy-mm-dd"
	});
	$("#updateon").datepicker({
		dateFormat: "mm/dd/yy"
	});


	if ($(".remove_button").length == 1) {
		$(".remove_button").first().hide();
	}
	var maxField = 10;
	var addButton = $('.add_button');
	var wrapper = $('.field_wrapper');
	var x = $('.editor').length;
	$(addButton).click(function() {
		if (x < maxField) {
			x++;
			$(wrapper).append('<br><br><div class="py-2"><textarea name="content[]" id="editor_' + x + '" class="form-control editor" rows="5"></textarea><br><a href="javascript:void(0);"  class="remove_button btn btn-danger float-right mt-2 mb-2">Remove</a></div>');
			generateCkEditor('editor_' + x);
		}
		$(".remove_button").show();
		if ($(".remove_button").length == 1) {
			$(".remove_button").first().hide();
		}
	});

	$(wrapper).on('click', '.remove_button', function(e) {
		var newCont = $(this);
		$('#deleteModal').modal({
			backdrop: 'static',
			keyboard: false
		})
			.on('click', '#delete', function(e) {
			e.preventDefault();
			newCont.parent('div').remove();
			x--;
			if ($(".remove_button").length == 1) {
				$(".remove_button").first().hide();
			}
			$('#deleteModal').modal('toggle');
		});
	});

	$("#mainMenuSelect").select2({
		dropdownParent: $('#headModel')
	});

	$("#subMenuSelect").select2({
		dropdownParent: $('#myModal')
	});

	$("#subSubMenuSelect").select2({
		dropdownParent: $('#subSubMenuModal')
	});

});

function getDataFromDropDown() {
	var selectedText = $('#mainMenuSelect option:selected').text();
	var selectedSlug = $('#mainMenuSelect option:selected').attr('slug');
	$('#slug').val(selectedSlug);
	$('#menu_name').val(selectedText);
}

function getDataFromDropDown2() {
	var selectedText2 = $('#subMenuSelect option:selected').text();
	var selectedSlug2 = $('#subMenuSelect option:selected').attr('slug');
	$('#slug2').val(selectedSlug2);
	$('#menu_name2').val(selectedText2);
}

function getDataFromDropDown3() {
	var selectedText3 = $('#subSubMenuSelect option:selected').text();
	var selectedSlug3 = $('#subSubMenuSelect option:selected').attr('slug');
	$('#slug3').val(selectedSlug3);
	$('#menu_name3').val(selectedText3);
}

function first_img(input) {

	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#img').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}
$(document).ready(function() {
	$(".blog_img").change(function() {
		first_img(this);
	});

	var maxLength = 180;
	$('#meta_desc').keyup(function() {
		var textlen = maxLength - $(this).val().length;
		$('#rchars').text(textlen);
	});

	var short_description = 135;
	$('#short_description').keyup(function() {
		var textlen = short_description - $(this).val().length;
		$('#rchars1').text(textlen);
	});

	var titld = 60;
	$('#page_title').keyup(function() {
		var textlen = titld - $(this).val().length;
		$('#titld1').text(textlen);
	});

	$('#page_title_').keyup(function() {
		var textlen = titld - $(this).val().length;
		$('#titld1').text(textlen);
	});

	$("#primary_cat_id").change(function(){
		var value = $('select#primary_cat_id option:selected').attr('ref');
		$('#fntPage').val('blog/'+value+'/');
	})

	/*$("#page_title").blur(function() {
        var titleTOSlug = $(this).val();
        if (titleTOSlug) {
            var slg = convertToSlug($(this).val());
            $('#slug').val(slg);
			var fPage = $('#fntPage').val();
            $('#canonical_tag').val(base_url +fPage+ slg);
            $('#temp_slag').html('<b>Slug:</b>' + base_url +fPage+ slg + '&nbsp;&nbsp;<span onclick="editSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-edit"></span>');
        }
    });*/
	$("#page_title").blur(function() {
		var titleTOSlug = $(this).val();
		if (titleTOSlug) {
			var slg = convertToSlug($(this).val());
			$('#slug').val(slg);
			var fPage = $('#fntPage').val();
			$('#canonical_tag').val(base_url+fPage+ slg);
			$('#temp_slag').html('<b>Slug:</b>' + base_url +fPage+ slg + '&nbsp;&nbsp;<span onclick="editSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-edit"></span>');
		}
	});
	generateCkEditor();
});



function editSlug() {
	var slg = $('#slug').val();
	var fPage = $('#fntPage').val();
	$('#temp_slag').html('<b>Slug:</b>' + base_url+fPage+ '<input type="text" id="edit_temp_slug" value="' + slg + '">&nbsp;&nbsp;<span onclick="addSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-check"></span>&nbsp;&nbsp;<span onclick="closeSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-close"></span>');
}

function addSlug() {
	var slg = convertToSlug($('#edit_temp_slug').val());
	$('#slug').val(slg);
	var fPage = $('#fntPage').val();
	$('#canonical_tag').val(base_url+fPage+ slg);
	$('#temp_slag').html('<b>Slug:</b>' + base_url+fPage+ slg + '&nbsp;&nbsp;<span onclick="editSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-edit"></span>');
}

function closeSlug() {
	var slg = $('#slug').val();
	var fPage = $('#fntPage').val();
	$('#temp_slag').html('<b>Slug:</b>' + base_url+fPage+ slg + '&nbsp;&nbsp;<span onclick="editSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-edit"></span>');
}

function convertToSlug(Text) {
	return Text
		.toString()
		.toLowerCase()
		.replace(/ /g, '-')
		.replace(/[^\w-]+/g, '');
}

function frmValidate() {
	if ($("#add_edit_post").valid()) {
		$("#add_edit_post").submit();
	}
}

function generateCkEditor(sameId = '') {
	if (sameId == '') {
		$('.editor').each(function(i, obj) {
			var id = $(this).attr('id');
			setTimeout(function() {
				CKEDITOR.config.allowedContent = true;
				CKEDITOR.replace(id, {
					height: 300,
					filebrowserUploadUrl: base_url + "blogs/posts/uploadimge"
				});
			}, 200);
		});
	} else {
		setTimeout(function() {
			CKEDITOR.config.allowedContent = true;
			CKEDITOR.replace(sameId, {
				height: 300,
				filebrowserUploadUrl: base_url + "blogs/posts/uploadimge"
			});
		}, 200);
	}
}

function deleteFunction(deleteURL) {
	$('#deleteModal').modal({
		backdrop: 'static',
		keyboard: false
	})
		.on('click', '#delete', function(e) {
		window.location.href = deleteURL;
	});
}


function updateDefult(id,name){
	if(confirm("Are you sure to change defult post ?") ==true){
		$.ajax({
			type: 'POST',
			url: 'updare_order',
			data:{'id':id,'name':name},
			success: function (data) {
				location.reload();
			}
		});
	}
}

function isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	}
	return true;
}

function getSubCategory(catId){
	$.ajax({
		type: 'POST',
		url: base_url +'blogs/posts/getSubCategory',
		data:{'catId':catId},
		success: function (data) {		
			var html = '<select name="topics[]" class="form-control" id="topics1" multiple>';
			$.each(JSON.parse(data), function (i, item) {
				html += "<option value='" + item.id + "'> " + item.cat_name + "</option>";
			}); 
			html +="</select>";
			$('#topic_cont').html('');
			$('#topic_cont').html(html);
			$("#topics1").multiselect({
				columns: 1,
				placeholder: 'Select Topics',
				search: true,
				selectAll: true,
				rebuild:true
			});
		}
	});
}

function changePostOrders(ste){
	if(confirm("Are you sure to change values?") ==true){
		var $inputs = $("#form_"+ste+" :input");
		var values = {};
		$inputs.each(function() {
			var la = this.name.split("_");
			if(la[0] =='order'){
				values[this.name] = $(this).val();
			}
		});
		values['category'] = ste;
		values['defult'] = $('input[name="defult_'+ste+'"]:checked').val();
		values['trending'] = $('input[name="trending_'+ste+'"]:checked').val();
		$.ajax({
			type: 'POST',
			url: 'update_ordering',
			data:values,
			success: function (data) {
				location.reload();
			}
		});
	}
}


