$(document).ready(function () {

	$('#btn-modal-staffmember').on('click', function () {
		$.get("/admincp/staff/create", function( data ) {
	  		$('#modal-staffmember-create').modal('show');
			$('.modal-content-staffmember').html(data);
			staff_form();
		});
	});

	$('.table-staff').delegate('.btn-modal-staff-edit','click', function () {
		var id = $(this).find('input[type=hidden]').val();
		$.get("staff/" + id + '/edit', function( data ) {
	  		$('#modal-staffmember').modal('show');
			$('.modal-content-staffmember').html(data);
			staff_form();
		});
	})

	function staff_form () {
	}
});