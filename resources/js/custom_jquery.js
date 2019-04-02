$(document).ready(function(){
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