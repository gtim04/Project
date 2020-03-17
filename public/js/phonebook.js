// //variables
var buttonStatus, fname, lname, cnum, token;

$("#tableContent").on("click", '#add', function(){
	buttonStatus = 'add';
	fname = $("#fname").val();
	lname = $("#lname").val();
	cnum = $("#cnum").val();
	
	if(fname && lname && cnum !== ''){
		if (confirm('Are you sure you want to save this contact?')) {
			setToken();
		    $.post('/Phonebook/add',
			{
				buttonstatus: buttonStatus,
				fname: fname,
				lname: lname,
				cnum: cnum
			},
			function(data){
				alert(data);
				$('#tableContent').load('/Phonebook table');
			});
		} else {
		    $("#fname").val('');
			$("#lname").val('');
			$("#cnum").val('');
		}
	} else {
		alert('Required fields cannot be empty!');
	}
}); //addbtn function

function deleteBtn (id) { 

	var button = $("#delete"+id).val();
	fname = $("#fname"+id).val();
	lname = $("#lname"+id).val();
	cnum = $("#cnum"+id).val();

	if(button == 'delete'){
		
		buttonStatus = 'delete';

		if (confirm('Are you sure you want to delete contact?')) {
			setToken();
		    $.post("/Phonebook/delete",
			{
				id: id
			},
			function(data){
				alert(data);
				$('#tableContent').load('/Phonebook table');
			});
		}
	} else {

		// buttonStatus = 'edit';

		if (confirm('Are you sure you want to update contact?')) {
			setToken();
		    $.post("/Phonebook/edit",
			{
				buttonstatus: buttonStatus,
				fname: fname,
				lname: lname,
				cnum: cnum,
				id: id
			},
			function(data){
				alert(data);
				$('#tableContent').load('/Phonebook table');
			});
		}
	}
} //dynamic delete buttons

function setToken(){
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
}

$('#tableContent').on('keyup', '.nfield', function() {

	var num = $(this).val();

	if(!num.match(/^[0-9]*$/)){
		alert('Letters are not allowed!');
		$(this).val(num.substr(0, num.length - 1));
	} else if(num.length > 11){
		alert('Contact number should only be 11 digits.');
		$(this).val(num.substr(0, num.length - 1));
	}

}); //validation for numberfield

$('#tableContent').on('input', '.tfield', function() {

	var text = $(this).val();

	if(!text.match(/^[A-Za-z]*$/)){
		$(this).val(text.substr(0, text.length - 1));
		alert('Numbers or space are not allowed!');
	} else if (text.length > 30){
		$(this).val(text.substr(0, text.length - 1));
		alert('Name fields should only contain 30 characters or less.');
	}

}); //validation for textfield

$("#search").on('input', function() {

	var filter, rows, data;
	filter = $(this).val().toLowerCase();
	rows = $("#dynamic").find('tr');

	rows.each(function(){
		data = $(this);
		data.toggle(data.html().toLowerCase().indexOf(filter) > -1);
	});

});

function editBtn (id) { 

	var button = $("#edit"+id).val();

	if(button == 'edit'){
		$("#fname"+id).prop("readonly", false);
		$("#lname"+id).prop("readonly", false);
		$("#cnum"+id).prop("readonly", false);
		$("#edit"+id).val('drop');
		$("#delete"+id).val('save');
		$("#fname").prop("readonly", true);
		$("#lname").prop("readonly", true);
		$("#cnum").prop("readonly", true);
		$("#add").prop("readonly", true);
		$('input[type="button"][value="edit"]').prop("disabled", true);
		$('input[type="button"][value="delete"]').prop("disabled", true);
		$('input[type="button"][value="Save Contact"]').prop("disabled", true);
		$("#fname"+id).focus().select();
	} else {
		$("#fname"+id).prop("readonly", true);
		$("#lname"+id).prop("readonly", true);
		$("#cnum"+id).prop("readonly", true);
		$('input[type="button"][value="edit"]').prop("disabled", false);
		$('input[type="button"][value="delete"]').prop("disabled", false);
		$('input[type="button"][value="Save Contact"]').prop("disabled", false);
		$("#edit"+id).val('edit');
		$("#delete"+id).val('delete');
		alert('No changes made.');
	}
}//dynamic edit buttons