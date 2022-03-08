$(document).ready(function() {
	returncounty();
	returncountySide();
	$( "#customerModal" ).on('show.bs.modal', function (e) {
		$("#i_validate").html('');
		$("#customerID2").val('');
	});

	$("#frm_Enter_customerid").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			i: {
				required: true,
				remote:function()
				{
					return {
						async: false,
						type: "GET",
						url:  base_url + "checkcustomerid"
					}
				} 
			}
		},
		errorPlacement: function(error, element) {
			var name = $(element).attr("name");
			$("#" + name + "_validate").html('');
			error.appendTo($("#" + name + "_validate"));
		},
		messages: {
			i: {
				required: "Please enter a Customer ID",
				remote: "We’re sorry but we are unable to load your prescription drug history. You can still review plans and pricing by clicking the Find A Plan button and entering your drugs manually."
			}
		}
	});
});
function frm_Enter_Custome_ID() {
	$("#customerID_validate").html('');
	if ($("#frm_Enter_customerid").valid()) {
		console.log(123123213);
		var customerID = $("#customerID2").val();
		var redirectUrl = $("#redirectUrl").val();
		var leadsrc_b = $("#leadsrc_b").val();
		var refid_b = $("#refid_b").val();
		var zip = $("#zip").val();
		var coveragestartdate_b = $("#coveragestartdate_b").val();
		window.location.href = '//enroll.clearmatchmedicare.com/drugBasket?customerid='+customerID+'&redirectUrl='+redirectUrl+'&zip='+zip+'&leadsrc='+leadsrc_b+'&refid='+refid_b+'&gender=F&s=webUserId&effectiveDate='+coveragestartdate_b;
	}
}
$(document).ready(function () {
	$(document).on('click', '#search_loadBtn', function () {
		var row = Number($('#row').val());
		var count = Number($('#postCount').val());
		var limit = Number($('#limit').val());
		row++;
		$('#row').val(row);
		var alldata = {
			search_txt: $('#search_txt').val()
		};
		$.ajax({
			type: 'POST',
			data: alldata,
			url: 'loadmore_search/'+row,
			success: function (data) {
				var rowCount = row * limit;
				$('.postList').append(data);
				if (rowCount >= count) {
					$('#search_loadBtn').css("display", "none");
				}
			}
		});
	});

	$(document).on('click', '#loadBtn', function () {
		var row = Number($('#row').val());
		var count = Number($('#postCount').val());
		var limit = Number($('#limit').val());
		row++;
		$('#row').val(row);

		$.ajax({
			type: 'POST',
			url: 'loadmore/'+row,
			success: function (data) {
				var rowCount = row * limit;
				$('.postList').append(data);
				if (rowCount >= count) {
					$('#loadBtn').css("display", "none");
				}
			}
		});
	});

});

$(document).ready(function() {

	$(".customer-id").click(function(){
		$("#customerID2").val('');
		$("#customerID").val('');
		$("#customerID2-error").html('');
		$("#customerID-error").html('');
	})

	$('#zipcode_mobile').click(function() {
		//alert(123)
		$("#zip_validate").html('');
	})

	$('input[type=text]').keydown(function(e) {
		if (e.keyCode==8){
			var fld_id = $(this).attr('id');
			$('#'+fld_id+'_validate').html('');
		}
	})

	$('input[type=text]').focus(function() {
		//if ( $(this).hasClass("error") &&  $(this).val() !='') {  
		if ($(this).hasClass("error")) { 
			var fld_id = $(this).attr('id');
			$('#'+fld_id+'_validate').html('');

			$(this).val('');
			var fld_nam = $(this).attr('name');
			var ref = $('.'+fld_nam+'_validate').attr('ref');
			$('.'+fld_nam+'_validate').html(ref);
		}

	})

	/*
	var zeynep = $('.zeynep').zeynep({
		onClosed: function() {
			// enable main wrapper element clicks on any its children element
			$("body main").attr("style", "");

			console.log('the side menu is closed.');
		},
		onOpened: function() {
			// disable main wrapper element clicks on any its children element
			$("body main").attr("style", "pointer-events: none;");

			console.log('the side menu is opened.');
		},
		onLoad: function(){
			$('.zeynep').css('display','block');
		}
	});

	// handle zeynep overlay click
	$(".close").click(function() {
		zeynep.close();
	});
*/
	// open side menu if the button is clicked
	$(".btn-open").click(function() {
		if ($("html").hasClass("zeynep-opened")) {
			zeynep.close();
		} else {
			zeynep.open();
		}
	});
	//Close menu on click of enter-customer-id
	$('#mobEnterCustomerId').click(function(){
		zeynep.close();
	});

	//Submenu in top nav
	$('.dropdown-submenu a.submenu-header').on("mouseenter", function(e) {
		$(this).next('div').show();
		e.stopPropagation();
		e.preventDefault();
	});
	$('.dropdown-submenu').on("mouseleave", function(e) {
		$(this).find('.submenu').hide();
		e.stopPropagation();
		e.preventDefault();
	})

	$('#today_year').val(new Date().getFullYear());
	$('#today_month').val(new Date().getMonth());
	$('#today_day').val(new Date().getDate());
	//$('#zipcode').val('');

	$("#customerID2").focus(function(){
		$("#customerID_validate").html('');
	})


	$("#frm_newsletter").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			newsletter: {
				required: true,
				email: true
			}
		},
		errorPlacement: function (error, element) {
			var name = $(element).attr("name");
			$("#" + name + "_validate").html('');
			error.appendTo($("#" + name + "_validate"));
			setTimeout(function(){ $("#" + name + "_validate").html($("#" + name + "_validate").attr('txt')); }, 2000);
		},
		messages: {
			newsletter: {
				required: "Invalid Email!",
				email: "Invalid Email!"
			}
		}
	});

	$("#frm_newsletter_2").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			newsletter_2: {
				required: true,
				email: true
			}
		},
		errorPlacement: function (error, element) {
			var name = $(element).attr("name");
			$("#" + name + "_validate").html('');
			error.appendTo($("#" + name + "_validate"));
			setTimeout(function(){ $("#" + name + "_validate").html($("#" + name + "_validate").attr('txt')); }, 2000);
		},
		messages: {
			newsletter_2: {
				required: "Invalid Email!",
				email: "Invalid Email!"
			}
		}
	});

	$("#get_frm").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			zip: {
				required: true,
				number: true,
				maxlength: 5,
				minlength: 5,
				remote:function()
				{
					return {
						async: false,
						url:  base_url + "checkzip"

					}
				}
			},
			coverageMonth: {
				required: true,
				number: true,
				maxlength: 2,
				range: [1, 12]
			},
			coverageDay: {
				required: true,
				number: true,
				maxlength: 2,
				range: [1, 31]
			},
			coverageYear: {
				required: true,
				number: true,
				maxlength: 4,
				minlength: 4,
				min: 2020,
				range: [2021, 3000]
			}
		},
		errorPlacement: function(error, element) {
			var name = $(element).attr("name");
			// if($("#" + name).val() !=""){
			$("." + name + "_validate").html('');
			error.appendTo($("." + name + "_validate"));
			// }
		},
		messages: {
			zip: {
				required: "INVALID ZIP CODE",
				number: "INVALID ZIP CODE",
				maxlength: "INVALID ZIP CODE",
				minlength: "INVALID ZIP CODE",
				remote: "INVALID ZIP CODE"
			},
			coverageYear: {
				required: "INVALID DATE",
				number: "INVALID DATE",
				maxlength: "INVALID DATE",
				minlength: "INVALID DATE",
				min: "INVALID DATE",
				range: "INVALID DATE"
			},
			coverageMonth: {
				required: "INVALID DATE",
				number: "INVALID DATE",
				maxlength: "INVALID DATE",
				range: "INVALID DATE"
			},
			coverageDay: {
				required: "INVALID DATE",
				number: "INVALID DATE",
				maxlength: "INVALID DATE",
				range:"INVALID DATE"
			}
		}
	});

	$("#get_sidebar_frm_mobile").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			zip: {
				required: true,
				number: true,
				maxlength: 5,
				minlength: 5,
				remote: function()
				{
					return {
						async: false,
						url:  base_url + "checkzip"

					}
				}
			}
		},
		messages: {
			zip: {
				required: "Please enter a valid ZIP Code",
				number: "Please enter a valid ZIP Code",
				maxlength: "Please enter a valid ZIP Code",
				minlength: "Please enter a valid ZIP Code",
				remote: "Please enter a valid ZIP Code"
			}
		},
		errorPlacement: function(error, element) {
			$("#zip_validate").html('');
			var name = $(element).attr("name");
			error.appendTo($("#" + name + "_validate"));
		}
	});

	$("#get_sidebar_frm").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			zip: {
				required: true,
				number: true,
				maxlength: 5,
				minlength: 5,
				remote: function()
				{
					return {
						async: false,
						url:  base_url + "checkzip"

					}
				}
			}
		},
		messages: {
			zip: {
				required: "Please enter a valid ZIP Code",
				number: "Please enter a valid ZIP Code",
				maxlength: "Please enter a valid ZIP Code",
				minlength: "Please enter a valid ZIP Code",
				remote: "Invalid ZIP Code!"
			}
		}
	});

	$("#get_sidebar_frm_2").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			zip: {
				required: true,
				number: true,
				maxlength: 5,
				minlength: 5,
				remote: function()
				{
					return {
						async: false,
						url:  base_url + "checkzip"

					}
				}
			}
		},
		messages: {
			zip: {
				required: "Please enter a valid ZIP Code",
				number: "Please enter a valid ZIP Code",
				maxlength: "Please enter a valid ZIP Code",
				minlength: "Please enter a valid ZIP Code",
				remote: "Invalid ZIP Code!"
			}
		}
	});

	$("#get_header_frm").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			zip: {
				required: true,
				number: true,
				maxlength: 5,
				minlength: 5,
				remote: function()
				{
					return {
						async: false,
						url:  base_url + "checkzip"

					}
				}
			}
		},
		errorPlacement: function(error, element) {
			var name = $(element).attr("name");
			error.appendTo($("#" + name + "_validate"));
		},
		messages: {
			zip: {
				required: "Please enter a valid ZIP Code",
				number: "Please enter a valid ZIP Code",
				maxlength: "Please enter a valid ZIP Code",
				minlength: "Please enter a valid ZIP Code",
				remote: "Invalid ZIP Code!"
			}
		}
	});



	$("#reqACall").validate({
		errorElement: "label",
		errorClass: "error",
		onkeyup: false,
		rules: {
			fname: {
				required: true
			},
			lname: {
				required: true
			},
			pno1: {
				required: true,
				number: true,
				maxlength: 3,
				minlength: 3
			},
			pno2: {
				required: true,
				number: true,
				maxlength: 3,
				minlength: 3
			},
			pno3: {
				required: true,
				number: true,
				maxlength: 4,
				minlength: 4
			}
		},
		errorPlacement: function(error, element) {
			var name = $(element).attr("name");
			if(name =='pno1'|| name=='pno2' || name =='pno3'){
				$("#phone_validate").html('');
				error.appendTo($("#phone_validate"));
			}else{
				error.appendTo($("#" + name + "_validate"));
			}
		},
		messages: {
			fname: {
				required: "Please enter First name"
			},
			lname: {
				required: "Please enter Last Name"
			},
			pno1: {
				required: "Please enter Phone number",
				maxlength: "Please enter Phone number",
				minlength: "Please enter Phone number"
			},
			pno2: {
				required: "Please enter Phone number",
				maxlength: "Please enter Phone number",
				minlength: "Please enter Phone number"
			},
			pno3: {
				required: "Please enter Phone number",
				maxlength: "Please enter Phone number",
				minlength: "Please enter Phone number"
			},
		}
	});

	//Search start
	var timer = null;

	$("#blog_search").keyup(function() {
		if (timer) {
			clearTimeout(timer);
		}
		var postData = $(this).val();
		var attrId = $(this).attr('id');
		timer = setTimeout(function() {
			getSearchResult(postData, attrId);
		}, 500);
	});

	$(".close-search").click(function() {
		$(".search_list").remove();
	});

	$("body").click(function() {
		$(".search_list").remove();
	});
	//Search end
	var phones = [{
		"mask": "(###) ###-####"
	}, {
		"mask": "(###) ###-####"
	}];

	$('#phoneNumber_mask').inputmask({
		mask: phones,
		greedy: false,
		definitions: {
			'#': {
				validator: "[0-9]",
				cardinality: 1
			}
		}
	});
	// datetimepicker
	$('#effectiveDate').datepicker({ dateFormat: 'mm/dd/yy',minDate: 0 });
})

function submitFrmCallMe(){
	if ($("#reqACall").valid()) {
		//	jQuery.ajax({
		//		type: "GET",
		//		url: 'https://api.ipstack.com/check?access_key=b2befb9d77dbafb1ceef806f521eca1c',
		//		success: function(data) {
		//			console.log(data);
		var alldata = {
			zip: '19192',
			pgName: 'contact-us',
			temp1: window.dataLayer[0].pagevalues.leadsrc,
			category: 'MA',
			refId: window.dataLayer[0].pagevalues.refid,
			subId: '',
			gclickid: '',
			transferPage: 'requestcall',
			firstName: $('#fname').val(),
			lastName: $('#lname').val(),
			phoneNumber: $('#pno1').val()+$('#pno2').val()+$('#pno3').val(),
		};
		$("#request_call_modal").modal('toggle');
		$("#successDownloadModal").modal();
		jQuery.ajax({
			type: "GET",
			url: 'https://qa.medicareusa.com/pgTransferMUSA.aspx?',
			data: alldata
		});
		//		}
		//	});
	}
}

function changeFocus(cureent,target,shift){
	if(cureent.length ==target){
		$('#'+shift).val('');
		$('#'+shift).focus();
	}
}

function setphone(val) {
	var string1 = val.replace(" ", "");
	var string2 = string1.replace("(", "");
	var string3 = string2.replace(")", "");
	var string4 = string3.replace("-", "");
	$("#phoneNumber").val(string4);
}



function frm_Enter_Custome_ID_sub(folder) {
	if ($("#frm_Enter_Custome_ID").valid()) {
		var customerID = $("#customerID").val();
		window.location.href = 'https://qaenroll.clearmatchmedicare.com/CustomerIdResponse.aspx?customerID='+customerID;
	}
}


function frmValidate(pdate) {
	if ($("#get_frm").valid()) {
		var currentDate = $("#effectiveDate").val();		
		if(new Date(pdate) <= new Date(currentDate)){
			var ajaxurlzip = base_url + "checkzip";
			var alldatazip = { zip: $('#zip').val() };
			jQuery.ajax({
				type: "GET",
				url: ajaxurlzip,
				data: alldatazip,
				success: function(data) {
					//console.log(data)
					//if(data == true){
					$("#staticBackdrop").modal();
					//}
				}
			});
		}else{
			$(".diff_validate").html('<label id="coverageMonth-error" class="error" for="diff_validate">INVALID DATE</label>');
			setTimeout(function(){
				var ref = $('.diff_validate').attr('ref');
				$('.diff_validate').html(ref);
			}, 2000);
		}		
	}
}

function frmValidate_mobile() {
	if ($("#get_sidebar_frm_mobile").valid()) {
		var ajaxurl = base_url + "returncounty";
		var alldata = {
			zip: $('#zipcode_side1').val()
		};
		jQuery.ajax({
			type: "GET",
			url: ajaxurl,
			data: alldata,
			success: function(data) {
				const obj = JSON.parse(data);
				$('#state_side1').val(obj.state);
				$('#county_side1').val(obj.county);
				$("#get_sidebar_frm_mobile").submit();
			}
		});
	}
}

function frmValidate_sidebar() {
	if ($("#get_sidebar_frm").valid()) {
		var ajaxurl = base_url + "returncounty";
		var alldata = {
			zip: $('#zipcode_side').val()
		};
		jQuery.ajax({
			type: "GET",
			url: ajaxurl,
			data: alldata,
			success: function(data) {
				const obj = JSON.parse(data);
				$('#state_side').val(obj.state);
				$('#county_side').val(obj.county);
				$("#get_sidebar_frm").submit();
			}
		});
	}
}

function frmValidate_sidebar_2() {
	if ($("#get_sidebar_frm_2").valid()) {
		//$("#get_sidebar_frm_2").submit();
		var sidebar_zipcode_2 = $.trim($('#sidebar_zipcode_2').val());
		location.href = '//qa.medicareUSA.com?zipcode=' + sidebar_zipcode_2
	}
}

function frmValidate_header() {
	if ($("#get_header_frm").valid()) {
		var ajaxurl = base_url + "returncounty";
		var alldata = {
			zip: $('#zip').val()
		};
		jQuery.ajax({
			type: "GET",
			url: ajaxurl,
			data: alldata,
			success: function(data) {
				$('#county').val(data);
				$("#get_header_frm").submit();
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



function getSearchResult(postData, attrId) {
	var ajaxurl = base_url + "search";
	var alldata = {
		search: postData
	};
	jQuery.ajax({
		type: "POST",
		url: ajaxurl,
		data: alldata,
		dataType: "json",
		success: function(data) {
			if (data.response == "success") {
				var resLnth = data.responseData.length;
				var ui = '<ul class="search_list">';
				if (resLnth > 0) {
					for (var i = 0; i < resLnth; i++) {
						ui += '<li><a href="' + search_url + 'blog/'+data.responseData[i].cat_slug+'/'+ data.responseData[i].slug + '">' + data.responseData[i].title + '</a></li>';
					}
				} else {
					ui += '<li>No record found</li>';
				}
				ui += '</ul>';
				$(".search_list").remove();
				$("#" + attrId + "_cont").append(ui);
			} else {
				alert('Sorry, Unable to submit form.');
			}
		}
	});
}

function isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	}
	return true;
}

function returncounty() {
	var ajaxurl = base_url + "returncounty";
	var alldata = {
		zip: $('#zip').val()
	};
	jQuery.ajax({
		type: "GET",
		url: ajaxurl,
		data: alldata,
		success: function(data) {
			const obj = JSON.parse(data);
			$('#state').val(obj.state);
			$('#county').val(obj.county);
		}
	});
}

function returncountySide() {
	var ajaxurl = base_url + "returncounty";
	var alldata = {
		zip: $('#zipcode_side').val()
	};
	jQuery.ajax({
		type: "GET",
		url: ajaxurl,
		data: alldata,
		success: function(data) {
			const obj = JSON.parse(data);
			$('#state_side').val(obj.state);
			$('#county_side').val(obj.county);
		}
	});
}

function returncountySide1() {
	var ajaxurl = base_url + "returncounty";
	var alldata = {
		zip: $('#zipcode_side1').val()
	};
	jQuery.ajax({
		type: "GET",
		url: ajaxurl,
		data: alldata,
		success: function(data) {
			const obj = JSON.parse(data);
			$('#state_side1').val(obj.state);
			$('#county_side1').val(obj.county);
		}
	});
}

function returncountyArr() {
	var ajaxurl = base_url + "returncountyArr";
	console.log( $('#zip').val());
	var alldata = {
		zip: $('#zip').val()
	};
	jQuery.ajax({
		type: "GET",
		url: ajaxurl,
		data: alldata,
		success: function(data) {
			$('#cunty_cont').html(data);
		}
	});
}

function returncountyArrFindaPlan(zipID) {
	var ajaxurl = base_url + "returncountyArr";
	console.log(zipID);
	var alldata = {
		zip: zipID
	};
	jQuery.ajax({
		type: "GET",
		url: ajaxurl,
		data: alldata,
		success: function(data) {
			$('#cunty_cont').html(data);
		}
	});
}

function submitFrmplan(transferPage, frm) {
	var action = $("#" + frm).attr('action');
	 $("#" + frm).attr('action',action+'/'+transferPage)
	$('#transferPage').val(transferPage);
	if ($("#" + frm).valid()) {
		$('#' + frm).submit();
	}
}

function updatedConvertionStartDate(dti,dtv){
	$("#diff_validate").html('');
	var currentDate = $("#effectiveDate").val();
	var currentDateArr = currentDate.split("/");
	if(dti =="coverageMonth"){
		$("#effectiveDate").val(dtv+'/'+currentDateArr[1]+'/'+currentDateArr[2]);
	}
	if(dti =="coverageDay"){
		$("#effectiveDate").val(currentDateArr[0]+'/'+dtv+'/'+currentDateArr[2]);
	}
	if(dti =="coverageYear"){
		$("#effectiveDate").val(currentDateArr[0]+'/'+currentDateArr[1]+'/'+dtv);
	}
}

function myFunction() {
	var dots = document.getElementById("dots");
	var moreText = document.getElementById("more");
	var btnText = document.getElementById("myBtn");

	if (dots.style.display === "none") {
		dots.style.display = "inline";
		btnText.innerHTML = "Read more";
		moreText.style.display = "none";
	} else {
		dots.style.display = "none";
		btnText.innerHTML = "Read less";
		moreText.style.display = "inline";
	}
}

function fun_newsletter(){
	if ($("#frm_newsletter").valid()) {
		var ajaxurl = base_url + "newsletter";
		var alldata = {
			newsletter: $('#newsletter').val()
		};
		jQuery.ajax({
			type: "post",
			url: ajaxurl,
			data: alldata,
			success: function(data) {
				const obj = JSON.parse(data);
				if(obj.message=="Subscribed."){
					$("#newsletter_validate").html('Thanks for Subscribing');
				}else{
					$("#newsletter_validate").html(obj.message);
					$("#newsletter_validate").addClass('newsletter_error');
				}
				setTimeout(function(){ 
					$("#newsletter_validate").html($("#newsletter_validate").attr('txt'));
					$("#newsletter_validate").removeClass('newsletter_error'); 
				}, 2000);
			}
		});
	}
}

function fun_newsletter_2(){
	if ($("#frm_newsletter_2").valid()) {
		var ajaxurl = base_url + "newsletter";
		var alldata = {
			newsletter: $('#newsletter_2').val()
		};
		jQuery.ajax({
			type: "post",
			url: ajaxurl,
			data: alldata,
			success: function(data) {
				const obj = JSON.parse(data);
				if(obj.message=="Subscribed."){
					$("#newsletter_2_validate").html('Thanks for Subscribing');
				}else{
					$("#newsletter_2_validate").html(obj.message);
					$("#newsletter_2_validate").addClass('newsletter_error');
				}
				setTimeout(function(){ 
					$("#newsletter_2_validate").html($("#newsletter_2_validate").attr('txt'));
					$("#newsletter_2_validate").removeClass('newsletter_error'); 
				}, 2000);
			}
		});
	}
}

function findSubmitFrm(transferPage, frm) {
	$('#transferPage').val(transferPage);
	document.getElementById(frm).submit();
}

function getCookie_(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for(let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}
$(document).ready(function() {
	var cId_ = getCookie_("RxCustomerID");
	if (cId_ != "") {
		console.log(cId_)
		$("#customerIdForm").hide();
		$("#customerID2").val(cId_);
		$("#customerId3").val(cId_);
		$("#cid_d").html(cId_);
		$("#customerIdRedirect").show();
	}

	$("#customerIdRedirect").click(function(){
		$("#frm_Enter_customerid").submit();
	})
})