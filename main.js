document.addEventListener("DOMContentLoaded", function(){

const A1 = 41;
const A2 = 18 ;
const A3 = 21 ;
const A4 = 63;
const A5 = 2;
const A6 = 53;
const A7 = 5 ;
const A8 = 57 ;
const A9 = 60;
const A10 = 93 ;
const A11 = 28 ;
const A12 = 3 ;
const A13 = 90 ;
const A14 = 39 ;
const A15 = 80 ;
const A16 = 88 ;
const A17 = 49 ;
const A18 = 60 ;
const A19 = 26 ;
const A20 = 28 ;

const categoryValues = {
    value: A1+A4
};

document.getElementById("submit").onclick = function() {
  document.getElementById("value").innerHTML = categoryValues.value;
}
console.table(categoryValues);


})

