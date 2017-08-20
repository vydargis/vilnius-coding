$(function(){
  var Renginys = "";
  $.getJSON("json/data.json", function(data){
    $.each(data, function(key, val){
      Renginys += val;
  });
  $("#Renginys1").text();
});
});

function getfirstmonthdayweekday(){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  var currentmonhfstday = new Date(year, month, 1);
  return currentmonhfstday.getDay();
}

function getdaysnr(currentDay){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  var day = date.getDay();
  var daynrinweek = new Date(year, month, currentDay);
  return daynrinweek.getDay();
}

function GetLastDay(){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  return new Date(year, month+1, 0).getDate();
}

function GetMonthInLT(){
  var month=[
    "Sausis",
    "Vasaris",
    "Kovas",
    "Balandis",
    "Gegužė",
    "Birželis",
    "Liepa",
    "Rugpjūtis",
    "Rugsėjis",
    "Spalis",
    "Lapkritis",
    "Gruodis"];
  var date = new Date();
  return month[date.getMonth()];
}

$(function(){
  var currentweek = 1;
  var currentDay = 1;
  var printDays = false;
  var daynr = getdaysnr();
  var daysInCurrentmonth = GetLastDay();
  var firstWeekDay = getfirstmonthdayweekday();
  $("#month").html(GetMonthInLT()).attr({class:"h1"});

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

  if (printDays){
    var day = $("<div></div>");
    day.attr({class:"day"});
    day.attr({id:"day"+currentDay});
    day.text(currentDay);
    week.append(day);

    if(getdaysnr(currentDay)==6||getdaysnr(currentDay)==0){
      day.attr({class:"weekend"});
    }
    if(currentDay==4||currentDay==9||currentDay==19||currentDay==21){
      day.attr({id:"event"+currentDay});
      var renginys = $("<p></p>");
      //renginys.text("Renginys");
      switch(currentDay){
        case 4:
          renginys.text("Spetaklis");
          break;
        case 9:
          renginys.text("Koncertas");
          break;
        case 19:
          renginys.text("Konferencija");
          break;
        case 21:
          renginys.text("Darbo balius");
      }
      day.append(renginys);
    }
    currentDay++;
    }
  else{
    var day = $("<div></div>");
    day.attr({class:"day"});
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
