$(function() {
	// testing // alert($(this).text());


	// INPUT SKAICIUS
	// $("#total").val("0");

	// TO DO
	// 1. turi neleisti operaciju su 0; pvz. 03 + 6 = 9; turi nerodyti 0, jei tai yra pirmasis skaicius
	// 2. kaip padaryti, jog paspaudus antra karta = nevyktu jokia kita operacija; kitaip tariant, kad skaicius liktu tas pats koks buvo atlikus operacija. gal tiktu sitas kodas(?):
			// .off()

			// $("#btn-8").dblclick(function(e){
		  //    e.preventDefault();

		  //  });   

			// su click is viso neleidzia spausti; dblclick neveikia
			// $("#op-result").on("dblclick", onMouseClick);

			// function onMouseClick(evt) {
			// 	$("#op-result").off("mousemove", onMouseOver);
		 //    }





	// KINTAMIEJI
	var arg1;
	var operation;


	
	// KREIPIASI I btn
	$("[id^='btn']").click(function() { // kreipiuosi i numbers
		var resDisplay = $("#total").val();
		$("#total").val(""); // kada reikia ir kada nerekia "" .val()
		resDisplay += $(this).text();
		$("#total").val(resDisplay);
	});

	// ATIMA SKAICIUS
	$("#op-subt").click(function() {
		operation = "-";
		arg1 = $("#total").val();
		$("#total").val("");
	});

	// SUDEDA SKAICIUS
	$("#op-add").click(function() {
		operation = "+";
		arg1 = $("#total").val();
		$("#total").val(""); //isvalo, bet arg1 vienas atsimina kintamaji
	});

	// SUDAUGINA SKAICIUS
	$("#op-mul").click(function() {
		operation = "*";
		arg1 = $("#total").val();
		$("#total").val("");
	});

	// PADALINA SKAICIUS
	$("#op-div").click(function() {
		operation = "/";
		arg1 = $("#total").val();
		$("#total").val("");
	});

	//SUDEDA ABU SKAICIUS = 
	$("#op-result").click(function() {
		var result = 0; // saugo rezultato reiksme

		// TO DO kaip situs if surasyti i funkcija??
		// tikrina kokia yra atliekama operacija
		if (operation == "+") {
			result = Number(arg1) + Number($("#total").val());
		}
		if (operation == "-") {
			result = Number(arg1) - Number($("#total").val());
		}

		if (operation == "*") {
			result = Number(arg1) * Number($("#total").val());
		}

		if (operation == "/") {
			result = Number(arg1) / Number($("#total").val());
		}

		// parodo rezultata
		$("#total").val(result);

	});



// PANAIKINA KAS YRA INPUTE
	$(".clear").click(function() {
		$("#total").val("");
	});


});