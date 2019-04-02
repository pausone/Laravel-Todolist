$(document).ready(function(){
	function responsive(){
		var width = $(window).width();

		if (width <= 375){
			$("#th-actions").text("");
		}
		if (width > 375){
			$("#th-actions").text("Actions");
		}
	}

	//Adapt to viewport
	responsive();

	//Adapt to viewport on change
	$(window).resize(function(){
	  responsive();
	});

	//Sortable table
	$('#myTable').DataTable({
		"columnDefs": [ {
			"targets": 2,
			"orderable": false
			} ],
		"order": [[ 1, "desc" ]]
	});

	//jQuery UI datepicker
	$('.datepicker').datepicker({});	

//-------------------------Validation with jQuery validation plugin-----------------------------------------------
	$.validator.addMethod('dateCustom', function(value, element){
		return /^\d{1,2}\/\d{1,2}\/\d{4}$/.test(value);}, 'Date in format DD/MM/YYYY');
	
	$('#todo-form').validate({
		rules: {			
			"description":{
				required: true,
				minlength: 1,
				maxlength: 255,
			},
			"due_date":{
				required: true,
				dateCustom: true
			}
		},
		messages: {
			description:{
				minlength: "Atleast 1 character",
				maxlength: "Maximum 255 characters"
			}	
		}
	});		
	
	jQuery.extend(jQuery.validator.messages, {
		required:'You have to fill in this field',
	});
});