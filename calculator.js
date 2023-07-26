 function sum(){
    var fnum = document.getElementById("fnum").value;
    var snum = document.getElementById("snum").value;
    var result = document.getElementById("result").value=+fnum + +snum;
    return;
 }
 function min(){
   var fnum = document.getElementById("fnum").value;
   var snum = document.getElementById("snum").value;
   var result = document.getElementById("result").value=+fnum - +snum;
   return;
}

 function mult(){
   var fnum = document.getElementById("fnum").value;
   var snum = document.getElementById("snum").value;
   var result = document.getElementById("result").value=+fnum * +snum;
   return;
}
function div(){
   var fnum = document.getElementById("fnum").value;
   var snum = document.getElementById("snum").value;
   //find quotient
   var result = document.getElementById("result").value=Math.floor(+fnum/+snum);
   //find remainder
   var rem = document.getElementById("rem").value= +fnum % +snum;
   return;
}
//trigonometry
function cos(){
   var input = document.getElementById("input").value;
   var radian =input * Math.PI/180;
   var rad= Math.cos(radian);
   var rad = document.getElementById("rad").value= Math.cos(radian);
 }

function sin(){
   var input = document.getElementById("input").value;
   var radian =input * Math.PI/180;
   var rad= Math.sin(radian);
   var rad = document.getElementById("rad").value= Math.sin(radian);
 }

 function tan(){
   var input = document.getElementById("input").value;
   var radian =input * Math.PI/180;
   var rad= Math.tan(radian);
   var rad = document.getElementById("rad").value= Math.tan(radian);
 }
 function sec(){
   var input = document.getElementById("input").value;
   var radian =input * Math.PI/180;
   var rad= 1/Math.cos(radian);
   var rad= document.getElementById("rad").value= 1/Math.cos(radian);
 }
 function cosec(){
   var input = document.getElementById("input").value;
   var radian =input * Math.PI/180;
   var rad= 1/Math.sin(radian);
   var rad = document.getElementById("rad").value= 1/Math.sin(radian);
 }

 function cot(){
   var input = document.getElementById("input").value;
   var radian =input * Math.PI/180;
   var rad= 1/Math.tan(radian);
   var rad = document.getElementById("rad").value= 1/Math.tan(radian);
 }