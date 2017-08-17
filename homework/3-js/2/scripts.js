$(function() {

	
//jei raŠome savo funkcijas, gali buti outside, funkcija nepaleidžiama kol neiškvieciama :)
//kalendoriuje reikia weekday žinot, kad atspausdint
function getfirstmonthdayweekday(){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  var currentmonhfstday = new Date(year, month, 1);
  return currentmonhfstday.getDay();
}

  $(function(){
    //console.log(GetLastDay)
  });

  function GetLastDay(){
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth();
    return new Date(year, month+1, 0).getDate();
  }
//console.log(GetLastDay());

function GetMonthInLT(){
var month=[
      "Sausis",
      "Vasaris",
      "Kovas",
      "Balandis",
      "Geguže",
      "Birželis",
      "Liepa",
      "Rugpjutis",
      "Rugsejis",
      "Spalis",
      "Lapkritis",
      "Gruodis"];

var date = new Date();
return month[date.getMonth()];//month tvarkingai nuo 0 iki 11
}

//cikla daryti while, cikla dei amžina, while true ir i vidu for cikla
$(function(){
  var currentweek = 1;
  var currentDay = 1;
  var printDays = false;
var daysInCurrentmonth = GetLastDay();
  var firstWeekDay = getfirstmonthdayweekday();
  $("#month").html(GetMonthInLT());

  while(true){
    var week = $("<div></div>");
    week.attr({class:"week"});
    week.attr({id:"week"+currentweek});

    $("#calendar").append(week);

    for (var i = 1; i <= 7; i++) {
      if(firstWeekDay == i){
        printDays = true;
      }

    if(currentDay>daysInCurrentmonth){
      printDays = false;
    }

      if (printDays) {
        var day = $("<div></div>");
        day.attr({class:"day"});
        day.attr({id:"day"+currentDay});
        day.text(currentDay);
        week.append(day);
        currentDay++;
      }else{
        var day = $("<div></div>");
        day.attr({class:"day"});
        day.attr({id:"day"+currentDay});
        day.text("");
        week.append(day);
      }
}

if (currentweek == 5){
  break;
}
    currentweek++;
  }
});



});