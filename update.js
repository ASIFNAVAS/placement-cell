var x= document.getElementById("one");
var y= document.getElementById("one");
var delayInMilliseconds = 1000;
var temp=0;


function clicked(){
    x.style.display = "none";
}


function clickee(){
    y.style.display = "block";
    console.log("hello")
}




function near() {
    document.getElementById('one').style.display = "block";
    localStorage.setItem('show', 'true'); //store state in localStorage
 }

window.onload = function() {
    var show = localStorage.getItem('show');
    if(show === 'true'){
         document.getElementById('one').style.display = "block";
    }

    localStorage.removeItem('show');
}

function trues(){
    localStorage.removeItem('show');
}