$(function() {

	var arg1;
	var operation;
// kreipiuosi i numbers
	$("[id^='btn']").click(function() {
		// alert($(this).text());
		var galutine = $("#total").val();

		galutine += $(this).text();

		$("#total").val(galutine);

	});

	// apsirasyti minusa

	$("#op-add").click(function() {
		operation = "+";
		arg1 = $("#total").val();
		$("#total").val(""); //isvalo, bet arg1 vienas atsimina kintamaji

	});

	$("#op-result").click(function() {
		var result = 0;
		if (operation == "+") {
			result = Number(arg1) + Number($("#total").val());
		}
		if (operation == "-") {
			result = Number(arg1) - Number($("#total").val());
		}
		 
		$("#total").val(result);
		
	});

});