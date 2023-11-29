// JavaScript Document
var num1 = document.getElementById('num1');
var num2 = document.getElementById('num2');
var calcFunc = document.getElementById('calcFunc');
var results = document.getElementById('results');
var calcExec = document.getElementById('calcExec');
var answer;
calcExec.addEventListener('click', calculate)
function calculate(){
	var n1 = parseFloat(num1.value);
    var n2 = parseFloat(num2.value);
	
	
	if(calcFunc.value=="multiply")
	{
		answer=n1*n2; 
		results.innerHTML='<h3>Result is: '+answer+'<h3>';
	}
	
	if(calcFunc.value=="add")
	{
		answer=n1+n2; 
		results.innerHTML='<h3>Result is: '+answer+'<h3>';
	}
	if(calcFunc.value=="sub")
	{
		answer=n1-n2; 
		results.innerHTML='<h3>Result is: '+answer+'<h3>';
	}
	if(calcFunc.value=="divide")
	{
		answer=n1/n2; 
		results.innerHTML='<h3>Result is: '+answer+'<h3>';
	}
}	