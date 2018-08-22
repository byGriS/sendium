$(document).ready(function(){
	let now = new Date();
	$('#datetimepicker').datepicker({
		startDate: now.toString('yyyy-MM-dd'),
		todayBtn: "linked",
    language: "ru",
    autoclose: true
	});
});