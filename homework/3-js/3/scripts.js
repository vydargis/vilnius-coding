// no validation

$(function() {
	$(".clean").click(function() {
		$(".box").html("Thank you!");
		$("#table, .container, h2").hide(200, "linear");

	});

	$("#btn").click(function() {
		var row = $("<tr></tr>");

		var $nameRow = "<td>" + "Name: <br>" + $("#name").val() + "</td>";
		var $surnameRow = "<td>" + "Surname: <br>" + $("#surname").val() + "</td>";
		row.html($nameRow + $surnameRow);

		$("#table").append(row);
	});

});

