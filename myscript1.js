var daysInYear = 365.25;
var daysInWeek = 7;
var yearsInLifetime = 80;
var avgweek;
var greet;
function myfunction() {
  avgweek = (daysInYear * yearsInLifetime) / daysInWeek;
  document.getElementById("demo").innerHTML = avgweek;
}
function distime() {
  greet = new Date().getHours();
  if (greet > 19)
  {
    document.getElementById("demo1").innerHTML = greet + " \'Good Night\'";
  }
  else if(greet > 7 && greet < 12)
  {
    document.getElementById("demo1").innerHTML = greet + " \'Good Morning\'";
  }
  else
  {
    document.getElementById("demo1").innerHTML = greet + " \'Good Afternoon\'";
  }
  
}

